<?php

namespace App\Http\Rules;

class CommonRule
{
    public static function phpPhonenumber(): string
    {
        return 'regex:/^09\d{9}$/';
    }

    public static function preventDigit()
    {
        return 'regex:/^[A-Za-z.\s]+$/';
    }

    public static function yearMax()
    {
        return 'max:'.(date('Y') + 1);
    }
}
