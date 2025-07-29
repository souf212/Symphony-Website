<?php

namespace App\Security\Voter;

use App\Entity\Invoice;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

final class InvoiceVoter extends Voter
{
    public const VIEW = 'invoice_view';
    public const CREAT = 'invoice_creat';
    public const EDIT = 'invoice_edit';
    public const DELETE = 'invoice_delete';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::VIEW,self::CREAT, self::EDIT, self::DELETE])
            && $subject instanceof Invoice;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();


        if (!$user instanceof User) {
            return false;
        }

        $invoice = $subject;

        return $invoice->getClient()->getUser() === $user;
    }
}
