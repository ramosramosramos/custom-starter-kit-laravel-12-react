<?php

namespace Tests\Feature\Custom\Rule;

use Tests\TestCase;
use App\Http\Rules\ChainRule;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ChainRuleTest extends TestCase
{
    use RefreshDatabase;
    public function test_chain_rule(): void
    {
        $rule = ChainRule::make()->string()->nullable()->integer()->email()->convertToString();
      dd($rule);
    }
}
