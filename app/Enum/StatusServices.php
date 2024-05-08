<?php

namespace App\Enum;

class StatusServices {
    const PENDING = 'pendente';
    const APPROVED = 'aprovado';
    const REJECTED ='rejeitado';
    const CANCELLED = 'cancelado';

    public static function all() {
        return [
            self::PENDING,
            self::APPROVED,
            self::REJECTED,
            self::CANCELLED,
        ];
    }
}
