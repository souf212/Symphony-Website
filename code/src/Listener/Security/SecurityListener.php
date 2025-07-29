<?php

namespace App\Listener\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;
use Symfony\Component\Security\Http\Event\LogoutEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;


class SecurityListener implements EventSubscriberInterface
{
    private EntityManagerInterface $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }



    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class     => 'onLoginSuccess',
            LogoutEvent::class           => 'onLogout',
        ];
    }



    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $token = $event->getAuthenticatedToken();
        if (null === $token) {
            return;
        }
        $user = $token->getUser();
        if ($user instanceof User) {
            $user->setLastLoginAt(new \DateTimeImmutable());
            $this->manager->flush();
        }
    }


    public function onLogout(LogoutEvent $event): void
    {
        $token = $event->getToken();
        if (! $token) {
            return;
        }
        $user = $token->getUser();
        if (method_exists($user, 'setLastLogoutAt')) {
            $user->setLastLogoutAt(new \DateTimeImmutable());
            $this->manager->flush();
        }
    }
}