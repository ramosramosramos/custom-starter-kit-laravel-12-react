<?php

declare(strict_types=1);

namespace App\Http\Rules\Concerns;

trait HasParameterRule
{
    /**
     * @var string[]
     */
    protected array $rules = [];

    public function after(string $date): self
    {
        $this->rules[] = 'after:'.$date;

        return $this;
    }

    public function afterOrEqual(string $date): self
    {
        $this->rules[] = 'after_or_equal:'.$date;

        return $this;
    }

    public function between(int $min, int $max): self
    {
        $this->rules[] = 'between:'.$min.','.$max;

        return $this;
    }

    public function before(string $date): self
    {
        $this->rules[] = 'before:'.$date;

        return $this;
    }

    public function currentPassword(string $password): self
    {
        $this->rules[] = 'current_password:'.$password;

        return $this;
    }

    public function endsWith(string $value): self
    {
        $this->rules[] = 'ends_with:'.$value;

        return $this;
    }

    /**
     * @param  array<string, mixed>  $options
     */
    public function dimensions(array $options): self
    {
        $this->rules[] = 'dimensions:'.implode(',', $options);

        return $this;
    }

    /**
     * @param  string  $format
     */
    public function dateFormat(string $format): self
    {
        $this->rules[] = 'date_format:'.$format;

        return $this;
    }

    /**
     * @param  string  $date
     */
    public function dateEquals(string $date): self
    {
        $this->rules[] = 'date_equals:'.$date;

        return $this;
    }

    /**
     * @param  int  $min
     * @param  int  $max
     */
    public function decimal(int $min, int $max): self
    {
        $this->rules[] = 'decimal:'.$min.','.$max;

        return $this;
    }

    /**
     * @param  string  $otherField
     * @param  string  $value
     */
    public function declinedIf(string $otherField, string $value): self
    {
        $this->rules[] = 'declined_if:'.$otherField.','.$value;

        return $this;
    }

    /**
     * @param  string  $field
     */
    public function different(string $field): self
    {
        $this->rules[] = 'different:'.$field;

        return $this;
    }

    /**
     * @param  int  $value
     */
    public function digits(int $value): self
    {
        $this->rules[] = 'digits:'.$value;

        return $this;
    }

    /**
     * @param  int  $min
     * @param  int  $max
     */
    public function digitsBetween(int $min, int $max): self
    {
        $this->rules[] = 'digits_between:'.$min.','.$max;

        return $this;
    }

    /**
     * @param  string  $value
     */
    public function doesntEndWith(string $value): self
    {
        $this->rules[] = 'doesnt_end_with:'.$value;

        return $this;
    }

    /**
     * @param  string  $value
     */
    public function doesntStartWith(string $value): self
    {
        $this->rules[] = 'doesnt_start_with:'.$value;

        return $this;
    }

    public function greaterThan(string $field): self
    {
        $this->rules[] = "gt:{$field}";

        return $this;
    }

    public function greaterThanOrEqual(string $field): self
    {
        $this->rules[] = "gte:{$field}";

        return $this;
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public function in(array $values): self
    {
        $this->rules[] = 'in:'.implode(',', $values);

        return $this;
    }

    /**
     * @param  string  $field
     */
    public function has(string $field): self
    {
        $this->rules[] = "has:{$field}";

        return $this;
    }

    /**
     * @param  string  $otherField
     */
    public function inArray(string $otherField): self
    {
        $this->rules[] = 'in_array:'.$otherField.'.*';

        return $this;
    }

    /**
     * @param  string  $field
     */
    public function lessThan(string $field): self
    {
        $this->rules[] = 'lt:'.$field;

        return $this;
    }

    /**
     * @param  string  $field
     */
    public function lessThanOrEqual(string $field): self
    {
        $this->rules[] = 'lte:'.$field;

        return $this;
    }

    public function max(int $value): self
    {
        $this->rules[] = 'max:'.$value;

        return $this;
    }

    public function maxDigits(int $value): self
    {
        $this->rules[] = 'max_digits:'.$value;

        return $this;
    }

    /**
     * @param  string[]  $value
     */
    public function mimes(array $value): self
    {
        $this->rules[] = 'mimes:'.implode(',', $value);

        return $this;
    }

    /**
     * @param  string[]  $value
     */
    public function mimeTypes(array $value): self
    {
        $this->rules[] = 'mimetypes:'.implode(',', $value);

        return $this;
    }

    public function minDigits(int $value): self
    {
        $this->rules[] = 'min_digits:'.$value;

        return $this;
    }

    public function multipleOf(int $value): self
    {
        $this->rules[] = 'multiple_of:'.$value;

        return $this;
    }

    public function min(int $value): self
    {
        $this->rules[] = 'min:'.$value;

        return $this;
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public function notIn(array $values): self
    {
        $this->rules[] = 'not_in:'.implode(',', $values);

        return $this;
    }

    public function notRegex(string $pattern): self
    {
        $this->rules[] = 'not_regex:'.$pattern;

        return $this;
    }

    public function regex(string $pattern): self
    {
        $this->rules[] = 'regex:'.$pattern;

        return $this;
    }

    /**
     * @param  string[]  $keys
     */
    public function requiredArrayKeys(array $keys): self
    {
        $this->rules[] = 'required_array_keys:'.implode(',', $keys);

        return $this;
    }

    /**
     * @param  string  $otherField
     * @param  string  $value
     */
    public function requiredIf(string $otherField, string $value): self
    {
        $this->rules[] = 'required_if:'.$otherField.','.$value;

        return $this;
    }

    public function requiredUnless(string $otherField, string $value): self
    {
        $this->rules[] = 'required_unless:'.$otherField.','.$value;

        return $this;
    }

    public function requiredWith(string $otherField): self
    {
        $this->rules[] = 'required_with:'.$otherField;

        return $this;
    }

    public function requiredWithout(string $otherField): self
    {
        $this->rules[] = 'required_without:'.$otherField;

        return $this;
    }

    public function requiredWithoutAll(string $otherField, string $value): self
    {
        $this->rules[] = 'required_without_all:'.$otherField.','.$value;

        return $this;
    }

    public function same(string $field): self
    {
        $this->rules[] = 'same:'.$field;

        return $this;
    }

    public function startsWith(string $value): self
    {
        $this->rules[] = 'starts_with:'.$value;

        return $this;
    }

    public function prohibitedIf(string $otherField, string $value): self
    {
        $this->rules[] = 'prohibited_if:'.$otherField.','.$value;

        return $this;
    }

    // /
    // /
    // /
    // /

    public function maxYear(int $year): self
    {
        $maxYear = $year;
        $this->rules[] = 'integer';
        $this->rules[] = 'digits:4';
        $this->rules[] = 'max:'.$maxYear;

        return $this;
    }

    public function minYear(int $year): self
    {
        $minYear = $year;
        $this->rules[] = 'integer';
        $this->rules[] = 'digits:4';
        $this->rules[] = 'min:'.$minYear;

        return $this;
    }

    /**
     * Conditionally adds file validation rules only if a file is provided.
     *
     * This is useful when the field is marked as nullable — if no file is passed,
     * the rule is skipped to avoid unnecessary validation errors.
     *
     * Example:
     *   ChainRule::make()
     *       ->nullable()
     *       ->skipFileIfNo($request->file('image'))
     *       ->skipImageIfNo($request->file('image'))
     *       ->skipMimeTypesIfNo(['image/jpeg', 'image/png'], $request->file('image'));
     *
     * ⚠️ Note: You must call ->nullable() before using these methods,
     * otherwise a LogicException will be thrown.
     *
     * @param  mixed  $file
     */
    public function skipFileIfNo($file): self
    {
        // if nullable and no file provided → skip
        if ($this->shouldSkipFile($file)) {
            return $this;
        }
        $this->rules[] = 'file';

        return $this;
    }

    /**
     * @param  mixed  $file
     */
    public function skipImageIfNo($file): self
    {
        // if nullable and no file provided → skip
        if ($this->shouldSkipFile($file)) {
            return $this;
        }
        $this->rules[] = 'image';

        return $this;
    }

    /**
     * Conditionally applies `mimes` validation only if a file is provided.
     *
     * The `mimes` rule checks the file **extension**, while `mimetypes` checks the file’s
     * actual MIME type from the uploaded content. Use `mimes` when you want to allow
     * files by their common extensions (e.g., jpg, png, pdf).
     *
     * Example:
     *   ChainRule::make()
     *       ->nullable()
     *       ->skipMimesIfNo(['jpg', 'png', 'pdf'], $request->file('document'));
     *
     * @param  array<string>  $arrayValues  Allowed file extensions.
     *                                      Common examples:
     *                                      - Images: ['jpg', 'jpeg', 'png', 'gif', 'webp']
     *                                      - Documents: ['pdf', 'doc', 'docx', 'txt']
     *                                      - Spreadsheets: ['xls', 'xlsx', 'csv']
     *                                      - Archives: ['zip', 'rar', '7z']
     * @param  mixed|null  $file  The uploaded file instance or null
     */
    public function skipMimesIfNo(array $arrayValues, $file): self
    {
        if ($this->shouldSkipFile($file)) {
            return $this;
        }
        $this->rules[] = 'mimes:'.implode(',', $arrayValues);

        return $this;
    }

    /**
     * Conditionally applies `mimetypes` validation only if a file is provided.
     *
     * Use this when the field is nullable — if no file is uploaded, the rule is skipped.
     *
     * Example:
     *   ChainRule::make()
     *       ->nullable()
     *       ->skipMimeTypesIfNo(['image/jpeg', 'image/png'], $request->file('avatar'));
     *
     * @param  array<string>  $arrayValues  Allowed MIME types.
     *                                      Common examples:
     *                                      - Images: ['image/jpeg', 'image/png', 'image/gif', 'image/webp']
     *                                      - Documents: ['application/pdf', 'application/msword',
     *                                      'application/vnd.openxmlformats-officedocument.wordprocessingml.document']
     *                                      - Spreadsheets: ['application/vnd.ms-excel',
     *                                      'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
     * @param  mixed|null  $file  The uploaded file instance or null
     */
    public function skipMimeTypesIfNo(array $arrayValues, $file): self
    {
        if ($this->shouldSkipFile($file)) {
            return $this;
        }
        $this->rules[] = 'mimetypes:'.implode(',', $arrayValues);

        return $this;
    }

    /**
     * @param  mixed  $file
     * @return bool
     *
     * @throws \LogicException
     */
    protected function shouldSkipFile($file): bool
    {
        // if developer forgot nullable but still using skip method
        if (! in_array('nullable', $this->rules, true)) {
            throw new \LogicException(
                'You must call ->nullable() before using ->skipImageIfEmpty().'
            );
        }

        return empty($file);
    }
}
