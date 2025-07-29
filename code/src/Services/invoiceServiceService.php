<?php

namespace App\Services;


use App\Interfaces\IInvoiceService;
use App\Entity\Invoice;
use App\Interfaces\IInvoiceRepo;
use App\Repository\InvoiceRepository;
use Symfony\Component\Security\Core\User\UserInterface;


class invoiceServiceService implements IInvoiceService
{
    private IInvoiceRepo $invoiceRepo;

    public function __construct(IInvoiceRepo $invoiceRepo)
    {
        $this->invoiceRepo = $invoiceRepo;
    }

    public function listByUser(UserInterface $user): array
    {
        return $this->invoiceRepo->findByUser($user);
    }

    public function new(Invoice $invoice, UserInterface $user): void
    {

        $this->invoiceRepo->save($invoice);
    }

    public function edit(Invoice $invoice): void
    {
        $this->invoiceRepo->update($invoice);
    }
    public function delete(Invoice $invoice): void
    {
        $this->invoiceRepo->delete($invoice);
    }



}