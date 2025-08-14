<?php

namespace App\Http\Rules;

class CommonArrayRule
{
    public static function shortNullableString()
    {
        return ['nullable', 'string', 'max:255'];
    }

    public static function shortRequiredString()
    {
        return ['required', 'string', 'max:255'];
    }
    public static function shortNullableNumeric()
    {
        return ['nullable', 'numeric'];
    }

    public static function shortRequiredNumeric()
    {
        return ['required', 'numeric'];
    }

    public static function longNullableString()
    {
        return ['nullable', 'string'];
    }

    public static function longRequiredString()
    {
        return ['required', 'string'];
    }

    public static function requiredBoolean()
    {
        return ['required', 'boolean'];
    }

    public static function nullableBoolean()
    {
        return ['nullable', 'boolean'];
    }

    public static function requiredDate()
    {
        return ['required', 'date'];
    }

    public static function nullableDate()
    {
        return ['nullable', 'date'];
    }

    public static function requiredURL()
    {
        return ['required', 'url'];
    }

    public static function nullableURL()
    {
        return ['nullable', 'url'];
    }

    public static function requiredCaptcha()
    {
        return ['required', 'captcha'];
    }

    public static function nullableCaptcha()
    {
        return ['nullable', 'captcha'];
    }

    public static function requiredImage()
    {
        return ['required', 'file', 'max:5024'];

    }
    public static function nullableImage()
    {
        return ['nullable', 'max:5024'];

    }
}
