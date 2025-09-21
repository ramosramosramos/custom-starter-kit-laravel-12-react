<?php

declare(strict_types=1);

namespace App\Http\Rules\Concerns;

trait HasSimpleRule
{
    /**
     * @var string[]
     */
    protected array $rules = [];

    public function ascii(): self
    {
        $this->rules[] = 'ascii';

        return $this;
    }

    public function accepted(): self
    {
        $this->rules[] = 'accepted';

        return $this;
    }

    public function activeUrl(): self
    {
        $this->rules[] = 'active_url';

        return $this;
    }

    public function alpha(): self
    {
        $this->rules[] = 'alpha';

        return $this;
    }

    public function alphabetAndNumber(): self
    {
        $this->rules[] = 'alpha_num';

        return $this;
    }

    public function alphaDash(): self
    {
        $this->rules[] = 'alpha_dash';

        return $this;
    }

    public function array(): self
    {
        $this->rules[] = 'array';

        return $this;
    }

    public function bail(): self
    {
        $this->rules[] = 'bail';

        return $this;
    }

    public function boolean(): self
    {
        $this->rules[] = 'boolean';

        return $this;
    }

    public function confirmed(): self
    {
        $this->rules[] = 'confirmed';

        return $this;
    }

    public function date(): self
    {
        $this->rules[] = 'date';

        return $this;
    }

    public function declined(): self
    {
        $this->rules[] = 'declined';

        return $this;
    }

    public function distinct(): self
    {
        $this->rules[] = 'distinct';

        return $this;
    }

    public function email(): self
    {
        $this->rules[] = 'email';

        return $this;
    }

    public function file(): self
    {
        $this->rules[] = 'file';

        return $this;
    }

    public function filled(): self
    {
        $this->rules[] = 'filled';

        return $this;
    }

    public function get(): self
    {
        $this->rules[] = 'get';

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

    public function has(string $field): self
    {
        $this->rules[] = "has:{$field}";

        return $this;
    }

    public function image(): self
    {
        $this->rules[] = 'image';

        return $this;
    }

    public function inspect(): self
    {
        $this->rules[] = 'inspect';

        return $this;
    }

    public function integer(): self
    {
        $this->rules[] = 'integer';

        return $this;
    }

    public function ip(): self
    {
        $this->rules[] = 'ip';

        return $this;
    }

    public function ipv4(): self
    {
        $this->rules[] = 'ipv4';

        return $this;
    }

    public function ipv6(): self
    {
        $this->rules[] = 'ipv6';

        return $this;
    }

    public function json(): self
    {
        $this->rules[] = 'json';

        return $this;
    }

    public function lowercase(): self
    {
        $this->rules[] = 'lowercase';

        return $this;
    }

    public function macAddress(): self
    {
        $this->rules[] = 'mac_address';

        return $this;
    }

    public function nullable(): self
    {
        $this->rules[] = 'nullable';

        return $this;
    }

    public function numeric(): self
    {
        $this->rules[] = 'numeric';

        return $this;
    }

    public function required(): self
    {
        $this->rules[] = 'required';

        return $this;
    }

    public function string(): self
    {
        $this->rules[] = 'string';

        return $this;
    }

    public function sometimes(): self
    {
        $this->rules[] = 'sometimes';

        return $this;
    }

    public function uppercase(): self
    {
        $this->rules[] = 'uppercase';

        return $this;
    }

    public function present(): self
    {
        $this->rules[] = 'present';

        return $this;
    }

    public function password(): self
    {
        $this->rules[] = 'password';

        return $this;
    }

    public function prohibited(): self
    {
        $this->rules[] = 'prohibited';

        return $this;
    }

    public function timezone(): self
    {
        $this->rules[] = 'timezone';

        return $this;
    }

    public function update(): self
    {
        $this->rules[] = 'update';

        return $this;
    }

    public function url(): self
    {
        $this->rules[] = 'url';

        return $this;
    }

    public function uuid(): self
    {
        $this->rules[] = 'uuid';

        return $this;
    }
}
