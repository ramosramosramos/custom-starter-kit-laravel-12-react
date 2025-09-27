<?php

declare(strict_types=1);

namespace App\Http\Rules;

use App\Http\Rules\Concerns\HasParameterRule;
use App\Http\Rules\Concerns\HasSimpleRule;

final class ChainRule
{
    use HasParameterRule;
    use HasSimpleRule;

    /**
     * @var string[]
     */
    protected array $rules = [];

    public static function make(): self
    {
        return new self();
    }

    /**
     * @return string[]
     */
    public function toArray(): array
    {
        return $this->rules;
    }

    public function toString(): string
    {
        return implode('|', $this->rules);
    }

    /**
     * @param  string[]  $rule
     */
    public function merge(array $rule): self
    {
        $this->rules = array_merge($this->rules, $rule);

        return $this;
    }
}
