<?php

declare(strict_types=1);

namespace App\Http\Rules;

class CommonArrayRule
{
    /**
     * The function shortNullableString() returns an array containing validation rules for a short
     * nullable string with a maximum length of 255 characters.
     *
     * @return string[] The method `shortNullableString()` returns an array containing the following
     *                  validation rules for a short nullable string: ['nullable', 'string', 'max:255'].
     */
    public static function shortNullableString(): array
    {
        return ['nullable', 'string', 'max:255'];
    }

    /**
     * The function `shortRequiredString` returns an array containing validation rules for a required
     * string with a maximum length of 255 characters in PHP.
     *
     * @return string[] An array containing the values 'required', 'string', and 'max:255' is being returned.
     */
    public static function shortRequiredString(): array
    {
        return ['required', 'string', 'max:255'];
    }

    /**
     * The function shortNullableNumeric() returns an array containing the strings 'nullable' and
     * 'numeric'.
     *
     * @return string[] The `shortNullableNumeric` function is returning an array containing the values
     *                  'nullable' and 'numeric'.
     */
    public static function shortNullableNumeric(): array
    {
        return ['nullable', 'numeric'];
    }

    /**
     * The function shortRequiredNumeric() returns an array containing the validation rules 'required' and
     * 'numeric'.
     *
     * @return string[] An array containing the validation rules 'required' and 'numeric' is being returned.
     */
    public static function shortRequiredNumeric(): array
    {
        return ['required', 'numeric'];
    }

    /**
     * The function "longNullableString" returns an array containing the strings 'nullable' and 'string'.
     *
     * @return string[] The `longNullableString` function is returning an array containing the values
     *                  'nullable' and 'string'.
     */
    public static function longNullableString(): array
    {
        return ['nullable', 'string'];
    }

    /**
     * The function returns an array containing the strings 'required' and 'string'.
     *
     * @return string[] An array containing the strings 'required' and 'string' is being returned.
     */
    public static function longRequiredString(): array
    {
        return ['required', 'string'];
    }

    /**
     * The function `requiredBoolean` returns an array containing the values 'required' and 'boolean'.
     *
     * @return string[] An array containing the values 'required' and 'boolean' is being returned.
     */
    public static function requiredBoolean(): array
    {
        return ['required', 'boolean'];
    }

    /**
     * The function `nullableBoolean` returns an array containing the values 'nullable' and 'boolean'.
     *
     * @return string[] The `nullableBoolean` function is returning an array containing the values 'nullable'
     *                  and 'boolean'.
     */
    public static function nullableBoolean(): array
    {
        return ['nullable', 'boolean'];
    }

    /**
     * The function `requiredDate` in PHP returns an array containing the values 'required' and 'date'.
     *
     * @return string[] An array containing the values 'required' and 'date' is being returned.
     */
    public static function requiredDate(): array
    {
        return ['required', 'date'];
    }

    /**
     * The function `nullableDate` returns an array containing the validation rules 'nullable' and 'date'
     * in PHP.
     *
     * @return string[] The `nullableDate` function is returning an array containing the values 'nullable' and
     *                  'date'.
     */
    public static function nullableDate(): array
    {
        return ['nullable', 'date'];
    }

    /**
     * The function `requiredURL` in PHP returns an array containing the strings 'required' and 'url'.
     *
     * @return string[] An array containing two elements: 'required' and 'url'.
     */
    public static function requiredURL(): array
    {
        return ['required', 'url'];
    }

    /**
     * The function `nullableURL` returns an array containing the strings 'nullable' and 'url'.
     *
     * @return string[] An array containing the values 'nullable' and 'url' is being returned.
     */
    public static function nullableURL(): array
    {
        return ['nullable', 'url'];
    }

    /**
     * The function "requiredCaptcha" returns an array containing the values 'required' and 'captcha'.
     *
     * @return string[] An array containing the values 'required' and 'captcha' is being returned.
     */
    public static function requiredCaptcha(): array
    {
        return ['required', 'captcha'];
    }

    /**
     * The function `nullableCaptcha` returns an array containing the values 'nullable' and 'captcha'.
     *
     * @return string[] An array containing the values 'nullable' and 'captcha' is being returned.
     */
    public static function nullableCaptcha(): array
    {
        return ['nullable', 'captcha'];
    }

    /**
     * The function `requiredImage` in PHP returns an array containing validation rules for a required
     * image file with a maximum size of 5024 bytes.
     *
     * @return string[] An array containing the validation rules for a required image upload. The rules
     *                  include 'required' to ensure the field is not empty, 'file' to ensure the input is a file, and
     *                  'max:5024' to set the maximum file size allowed to be uploaded.
     */
    public static function requiredImage(): array
    {
        return ['required', 'file', 'max:5024'];

    }

    /**
     * The function `nullableImage` returns an array with validation rules for a nullable image input with
     * a maximum size of 5024 bytes.
     *
     * @return string[] An array containing the values 'nullable' and 'max:5024' is being returned.
     */
    public static function nullableImage(): array
    {
        return ['nullable', 'max:5024'];

    }

    /**
     * The function `requiredYearRange` returns an array with validation rules for a required year range
     * in PHP.
     *
     * @return string[] An array containing two elements is being returned. The first element is the string
     *                  'required', and the second element is a regular expression pattern '/^\d{4}-\d{4}$/' which matches
     *                  a year range in the format 'YYYY-YYYY'.
     */
    public static function requiredYearRange(): array
    {
        return ['required', 'regex:/^\d{4}-\d{4}$/'];
    }
}
