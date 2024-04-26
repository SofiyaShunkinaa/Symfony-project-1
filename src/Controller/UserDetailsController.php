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

class UserDetailsController extends AbstractController
{
    private $entityManager;
    private $authorizationChecker;

    public function __construct(EntityManagerInterface $entityManager, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->entityManager = $entityManager;
        $this->authorizationChecker = $authorizationChecker;

    }

    #[Route('/user/details', name: 'user_details')]
    public function index(Request $request): Response
    {
        if (!$this->authorizationChecker->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Access denied, you must be logged in to view this page.');
        }

        $user = $this->getUser(); 
        $userDetails = new UserDetails();
        $userDetails->setUser($user); 

        $form = $this->createForm(UserDetailsFormType::class, $userDetails);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($userDetails);
            $this->entityManager->flush();

            return $this->redirectToRoute('user_details');
        }

        return $this->render('user_details/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
