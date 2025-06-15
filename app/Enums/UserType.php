<?php

namespace App\Enums;

enum UserType: string
{
    case ADMIN = 'admin';
    case DATA_ENTRY = 'data_entry';
    case TRAINER = 'trainer';
    case CUSTOMER = 'customer';

    public function label(): string
    {
        return match($this) {
            self::ADMIN => 'Admin',
            self::DATA_ENTRY => 'Data Entry',
            self::TRAINER => 'Trainer',
            self::CUSTOMER => 'Customer',
        };
    }
}
