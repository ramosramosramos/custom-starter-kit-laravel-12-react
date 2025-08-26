<?php

declare(strict_types=1);

namespace App\Http\Rules;

class CommonArrayRule
{
    /**
     * It is short nullable string validator
     *
     * @return string[]
     */
    public static function shortNullableString(): array
    {
        return ['nullable', 'string', 'max:255'];
    }

    /**
     * It is short required string validator
     *
     * @return string[]
     */
    public static function shortRequiredString(): array
    {
        return ['required', 'string', 'max:255'];
    }

    /**
     * It is short nullable numeric validator
     *
     * @return string[]
     */
    public static function shortNullableNumeric(): array
    {
        return ['nullable', 'numeric'];
    }

    /**
     * It is short required numeric validator
     *
     * @return string[]
     */
    public static function shortRequiredNumeric(): array
    {
        return ['required', 'numeric'];
    }

    /**
     * It is long nullable string validator
     *
     * @return string[]
     */
    public static function longNullableString(): array
    {
        return ['nullable', 'string'];
    }

    /**
     * It is long required string validator
     *
     * @return string[]
     */
    public static function longRequiredString(): array
    {
        return ['required', 'string'];
    }

    /**
     * It is required boolean validator
     *
     * @return string[]
     */
    public static function requiredBoolean(): array
    {
        return ['required', 'boolean'];
    }

    /**
     * It is nullable boolean validator
     *
     * @return string[]
     */
    public static function nullableBoolean(): array
    {
        return ['nullable', 'boolean'];
    }

    /**
     * It is required date validator
     *
     * @return string[]
     */
    public static function requiredDate(): array
    {
        return ['required', 'date'];
    }

    /**
     * It is nullable date validator
     *
     * @return string[]
     */
    public static function nullableDate(): array
    {
        return ['nullable', 'date'];
    }

    /**
     * It is required URL validator
     *
     * @return string[]
     */
    public static function requiredURL(): array
    {
        return ['required', 'url'];
    }

    /**
     * It is nullable URL validator
     *
     * @return string[]
     */
    public static function nullableURL(): array
    {
        return ['nullable', 'url'];
    }

    /**
     * It is required captcha validator
     *
     * @return string[]
     */
    public static function requiredCaptcha(): array
    {
        return ['required', 'captcha'];
    }

    /**
     * It is nullable captcha validator
     *
     * @return string[]
     */
    public static function nullableCaptcha(): array
    {
        return ['nullable', 'captcha'];
    }

    /**
     * It is required image validator
     *
     * @return string[]
     */
    public static function requiredImage(): array
    {
        return ['required', 'file', 'max:5024'];

    }

    /**
     * It is nullable image validator
     *
     * @return string[]
     */
    public static function nullableImage(): array
    {
        return ['nullable', 'max:5024'];

    }
}
