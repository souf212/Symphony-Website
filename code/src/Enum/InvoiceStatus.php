<?php

namespace App\Enum;

enum InvoiceStatus: string
{
    case PAID    = 'paid';
    case PARTIAL = 'partial';
    case UNPAID  = 'unpaid';


    public static function choices(): array
    {
        return array_combine(
            array_map(fn(self $s) => ucfirst($s->value), self::cases()),
            self::cases()
        );
    }
}