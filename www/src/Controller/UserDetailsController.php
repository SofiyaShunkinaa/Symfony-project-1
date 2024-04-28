<?php

namespace App\Controller;

use App\Entity\UserDetails;
use App\Form\UserDetailsFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\LogoutException;

class UserDetailsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/user-details', name: 'user_details')]
    #[Security("is_granted('ROLE_USER')")]
    public function index(Request $request): Response
    {
        $user = $this->getUser();

        if ($user->getStatus() === 'blocked') {
            return $this->redirectToRoute('app_logout');
        }

        $details = $user->getDetails();
        if (!$details) {
            $details = new UserDetails();
            $details->setUser($user);
            $user->setDetails($details);
        }

        $form = $this->createForm(UserDetailsFormType::class, $details);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($details);
            $entityManager->flush();

            return $this->redirectToRoute('users_manager');
        }

        return $this->render('user_details/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
