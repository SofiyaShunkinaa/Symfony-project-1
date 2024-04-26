<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class BlockedUserListener
{
    private TokenStorageInterface $tokenStorage;
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(TokenStorageInterface $tokenStorage, UrlGeneratorInterface $urlGenerator)
    {
        $this->tokenStorage = $tokenStorage;
        $this->urlGenerator = $urlGenerator;
    }

    public function onInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();

        if ($user->getStatus() === 'blocked') {
            $this->tokenStorage->setToken(null); // Очищаем токен
            $event->getRequest()->getSession()->invalidate(); // Очищаем сессию

            // Генерируем исключение AccessDeniedHttpException
            throw new AccessDeniedHttpException('Your account is blocked.');
        }
    }
}