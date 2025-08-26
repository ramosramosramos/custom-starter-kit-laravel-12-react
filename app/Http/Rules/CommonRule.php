<?php

declare(strict_types=1);

namespace App\Http\Rules;

class CommonRule
{
    /**
     * format for phone number in the philippines
     *
     * @return string
     */
    public static function phpPhonenumber(): string
    {
        return 'regex:/^09\d{9}$/';
    }

    /**
     * It prevents digit in the string
     *
     * @return string
     */
    public static function preventDigit(): string
    {
        return 'regex:/^[A-Za-z.\s]+$/';
    }

    /**
     * It is year validator for max year
     *
     * @return string
     */
    public static function yearMax(): string
    {
        return 'max:'.(date('Y') + 1);
    }
}
