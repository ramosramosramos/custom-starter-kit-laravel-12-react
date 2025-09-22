<?php

declare(strict_types=1);

namespace App\Http\Rules;

use App\Http\Rules\Concerns\HasParameterRule;
use App\Http\Rules\Concerns\HasSimpleRule;

class ChainRule
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

    /**
     * @return string
     */
    public function toString(): string
    {
        return implode('|', $this->rules);
    }

    /**
     * @param  string[]  $rule
     * @return ChainRule
     */
    public function merge(array $rule): self
    {
        $this->rules = array_merge($this->rules, $rule);

        return $this;
    }
}
