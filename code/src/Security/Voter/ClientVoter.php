<?php

namespace App\Security\Voter;

use App\Entity\Client;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

final class ClientVoter extends Voter
{
    public const VIEW   = 'CLIENT_VIEW';
    public const EDIT   = 'CLIENT_EDIT';
    public const DELETE = 'CLIENT_DELETE';

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::VIEW, self::EDIT, self::DELETE])
            && $subject instanceof Client;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (! $user instanceof User) {

            return false;
        }

        $client = $subject;

        return $client->getUser() === $user;
    }
}
