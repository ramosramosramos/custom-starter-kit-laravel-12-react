<?php

namespace App\Http\Rules;

class UserRule
{
    public static function name()
    {

        return [
            'required',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    public static function nullableName()
    {

        return [
            'nullable',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    public static function firstName()
    {

        return [
            'required',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    public static function lastName()
    {

        return [
            'required',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    public static function middleName()
    {
        return [
            'nullable',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    public static function suffix()
    {
        return [
            'nullable',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    public static function phoneNumber()
    {
        return ['required', CommonRule::phpPhonenumber()];
    }

    public static function nullablePhoneNumber()
    {
        return ['nullable', CommonRule::phpPhonenumber()];
    }

    public static function email()
    {
        return ['required', 'string', 'lowercase', 'email', 'max:255'];
    }

    public static function username()
    {
        return ['required', 'numeric'];
    }

    public static function role()
    {
        return ['required', 'string'];
    }

    public static function gender(): array
    {
        return ['required', 'string'];
    }

    public static function nullableGender(): array
    {
        return ['nullable', 'string'];
    }

    public static function birthdate()
    {
        return ['required', 'date', 'before:now'];
    }

    public static function nullableBirthdate()
    {
        return ['nullable', 'date', 'before:now'];
    }
}
