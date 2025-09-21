<?php

declare(strict_types=1);

namespace App\Http\Rules\Concerns;

trait HasTableRelatedRule
{
    /**
     * @var string[]
     */
    protected array $rules = [];

    /**
     * @param  string  $table
     * @param  string  $column
     * @param  mixed  $ignore
     * @param  string  $idColumn
     */
    public function unique(string $table, ?string $column = null, $ignore = null, string $idColumn = 'id'): self
    {
        $rule = 'unique:'.$table;

        if ($column) {
            $rule .= ','.$column;
        }

        if ($ignore) {
            // @phpstan-ignore-next-line
            $rule .= ','.$ignore.','.$idColumn;
        }

        $this->rules[] = $rule;

        return $this;
    }

    /**
     * @param  string  $table
     * @param  string  $column
     * @param  array<string, mixed>  $wheres
     */
    public function exists(string $table, ?string $column = null, array $wheres = []): self
    {
        $rule = 'exists:'.$table;

        if ($column) {
            $rule .= ','.$column;
        }

        foreach ($wheres as $col => $val) {
            // @phpstan-ignore-next-line
            $rule .= ','.$col.','.$val;
        }

        $this->rules[] = $rule;

        return $this;
    }
}
