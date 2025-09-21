<?php

declare(strict_types=1);

namespace App\Http\Rules;

use App\Http\Rules\Concerns\HasParameterRule;
use App\Http\Rules\Concerns\HasSimpleRule;
use App\Http\Rules\Concerns\HasTableRelatedRule;

class ChainRule
{
    use HasParameterRule;
    use HasSimpleRule;
    use HasTableRelatedRule;

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
    public function output(): array
    {
        return $this->rules;
    }

    public function convertToString(): string
    {
        return implode('|', $this->rules);
    }
}
