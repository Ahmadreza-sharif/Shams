<?php

namespace App\Helpers;

trait EnumToArray
{
    public static function __callStatic(string $name, array $arguments)
    {
        $array = self::arrayValues();
        return $array[$name] ?? null;
    }

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::values(), self::names());
    }

    public static function arrayValues(): array
    {
        return array_combine(self::names(), self::values());
    }

}
