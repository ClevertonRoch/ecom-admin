<?php

namespace App\Enum;

class Status {
    const ACTIVE = 'ativo';
    const INACTIVE = 'inativo';

    public function all(){
        return [
            self::ACTIVE,
            self::INACTIVE,
        ];
    }
}
