<?php
namespace App\Enum;


enum CowGenderEnum:string
{
    case MALE = 'male';
    case FEMALE = 'female';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

