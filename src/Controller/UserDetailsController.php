<?php

namespace App\Controller;

use App\Entity\UserDetails;
use App\Form\UserDetailsFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserDetailsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/user/details', name: 'user_details')]
    public function index(Request $request): Response
    {
        $user = $this->getUser(); // Получаем текущего пользователя
        $userDetails = new UserDetails();
        $userDetails->setUser($user); // Устанавливаем пользователя для UserDetails

        $form = $this->createForm(UserDetailsFormType::class, $userDetails);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($userDetails);
            $this->entityManager->flush();

            return $this->redirectToRoute('user_details'); // Redirect to some route after form submission
        }

        return $this->render('user_details/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
