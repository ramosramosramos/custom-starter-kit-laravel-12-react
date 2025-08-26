<?php

declare(strict_types=1);

namespace App\Http\Rules;

use App\Models\User;
use Illuminate\Validation\Rule;

class UserRule
{
    /**
     * @return array<string>
     */
    public static function name(): array
    {

        return [
            'required',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    /**
     * @return array<string>
     */
    public static function nullableName(): array
    {

        return [
            'nullable',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    /**
     * @return array<string>
     */
    public static function firstName(): array
    {

        return [
            'required',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    /**
     * @return array<string>
     */
    public static function lastName(): array
    {

        return [
            'required',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    /**
     * @return array<string>
     */
    public static function middleName(): array
    {
        return [
            'nullable',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    /**
     * @return array<string>
     */
    public static function suffix(): array
    {
        return [
            'nullable',
            'string',
            'max:255',
            CommonRule::preventDigit(),
        ];
    }

    /**
     * @return array<string>
     */
    public static function phoneNumber(): array
    {
        return ['required', CommonRule::phpPhonenumber()];
    }

    /**
     * @return array<string>
     */
    public static function nullablePhoneNumber(): array
    {
        return ['nullable', CommonRule::phpPhonenumber()];
    }

    /**
     * @return array<string>
     */
    public static function email(): array
    {
        return ['required', 'string', 'lowercase', 'email', 'max:255'];
    }

    /**
     * Summary of uniqueEmail
     *
     * @param  ?User  $user
     * @return array<\Illuminate\Validation\Rules\Unique|string>
     */
    public static function uniqueEmail(?User $user = null): array
    {
        return ['required', 'string', 'lowercase', 'email', 'max:255', $user ? Rule::unique(User::class, 'email')->ignore($user->id) : Rule::unique(User::class, 'email')];
    }

    /**
     * @return array<string>
     */
    public static function username(): array
    {
        return ['required', 'numeric'];
    }

    /**
     * @return array<string>
     */
    public static function role(): array
    {
        return ['required', 'string'];
    }

    /**
     * @return array<string>
     */
    public static function gender(): array
    {
        return ['required', 'string'];
    }

    /**
     * @return array<string>
     */
    public static function nullableGender(): array
    {
        return ['nullable', 'string'];
    }

    /**
     * @return array<string>
     */
    public static function birthdate(): array
    {
        return ['required', 'date', 'before:now'];
    }

    /**
     * @return array<string>
     */
    public static function nullableBirthdate(): array
    {
        return ['nullable', 'date', 'before:now'];
    }
}
