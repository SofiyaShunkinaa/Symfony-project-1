<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;


class UsersManagerController extends AbstractController
{
    private $authorizationChecker;
    private $entityManager;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker, EntityManagerInterface $entityManager)
    {
        $this->authorizationChecker = $authorizationChecker;
        $this->entityManager = $entityManager;
    }

    #[Route('/users-manager', name: 'users_manager')]
    public function usersTable(UserRepository $userRepository, Request $request): Response
    {
        $users = $userRepository->findAll();

        $page = $request->query->getInt('page', 1);
        $itemsPerPage = 7;
        $totalUsers = count($users);
        $totalPages = ceil($totalUsers / $itemsPerPage);

        if (!$this->authorizationChecker->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Access denied, you must be logged in to view this page.');
        }

        return $this->render('users_manager.html.twig', [
            'users' => $users,
            'currentPage' => $page,
            'itemsPerPage' => $itemsPerPage,
            'totalPages' => $totalPages,
        ]);
    }

    #[Route('/users-manager/delete/{id}', name: 'delete_user')]
    public function deleteUser($id): Response
    {
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $details = $user->getDetails();
        if ($details) {
            $this->entityManager->remove($details);
        }

        $this->entityManager->remove($user);
        $this->entityManager->flush();

        return $this->redirectToRoute('users_manager');
    }

    #[Route('/users-manager/block/{id}', name: 'block_user')]
    public function blockUser($id): Response
    {
        $user = $this->getUser();
        if ($user->getStatus() === 'blocked') {
            return $this->redirectToRoute('app_logout');
        }

        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $user->setStatus('blocked');
        $this->entityManager->flush();

        return $this->redirectToRoute('users_manager');
    }

    #[Route('/users-manager/unblock/{id}', name: 'unblock_user')]
    public function unblockUser($id): Response
    {
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $user->setStatus('active');
        $this->entityManager->flush();

        return $this->redirectToRoute('users_manager');
    }
}

