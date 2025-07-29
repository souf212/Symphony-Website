<?php

namespace App\Interfaces;

use App\Entity\Invoice;

interface IInvoiceRepo
{
    public function findByUser($user);
    public function save(Invoice $invoice): void;
    public function update(Invoice $invoice): void;
    public function delete(Invoice $invoice): void;

}