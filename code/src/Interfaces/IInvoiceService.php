<?php

namespace App\Interfaces;

use App\Entity\Invoice;
use Symfony\Component\Security\Core\User\UserInterface;

interface IInvoiceService
{
    public function listByUser(UserInterface $user): array;
    public function new(Invoice $invoice, UserInterface $user): void;
    public function edit(Invoice $invoice): void;
    public function delete(Invoice $invoice): void;


}