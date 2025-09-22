<?php

namespace Tests\Feature\Custom\Rule;

use Tests\TestCase;
use KentJerone\ChainRule\ChainRule;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChainRuleTest extends TestCase
{
    use RefreshDatabase;

    public function chain(): ChainRule
    {
        return ChainRule::make();
    }


    public function test_is_object_array_or_string()
    {
        $rule = $this->chain()->required()->string();
        $this->assertIsObject($rule);
        $this->assertIsArray($rule->toArray());
        $this->assertIsString($rule->toString());

    }


    public function test_chain_rule_merge(): void
    {
        $rule = $this->chain()->required()->string();
        $rule2 = ['hello'];
        $merged = $rule->merge($rule2);
        $this->assertIsArray($merged->toArray());
        $this->assertEquals(['required', 'string', 'hello'], $merged->toArray());
    }

    public function test_chain_rule_skip_if_has_image(): void
    {
        $rule = $this->chain()->nullable()->skipImageIfNo('image.png');

        $this->assertEquals(['nullable', 'image'], $rule->toArray());
    }

    public function test_chain_rule_skip_if_mimetype_has_file(): void
    {
        $rule = $this->chain()->nullable()->skipMimeTypesIfNo(['image/png'], 'file.pdf');

        $this->assertEquals(['nullable', 'mimetypes:image/png'], $rule->toArray());
    }

    public function test_chain_rule_skip_if_mime_has_file(): void
    {
        $rule = $this->chain()->nullable()->skipMimesIfNo(['image/png'], 'file.pdf');

        $this->assertEquals(['nullable', 'mimes:image/png'], $rule->toArray());
    }

    public function test_chain_rule_skip_if_has_file(): void
    {
        $rule = $this->chain()->nullable()->skipFileIfNo('file.pdf');

        $this->assertEquals(['nullable', 'file'], $rule->toArray());
    }

    public function test_chain_rule_skip_if_no(): void
    {
        $image = $this->chain()->nullable()->skipImageIfNo(null);
        $mimes = $this->chain()->nullable()->skipMimeTypesIfNo(['image/png'], null);
        $file = $this->chain()->nullable()->skipFileIfNo(null);
        $this->assertEquals(['nullable'], $image->toArray());
        $this->assertEquals(['nullable'], $mimes->toArray());
        $this->assertEquals(['nullable'], $file->toArray());
    }



    public function test_chain_in(): void
    {
        $rule = $this->chain()->nullable()->in(['yes', 'no']);

        $this->assertEquals(['nullable', 'in:yes,no'], $rule->toArray());
    }
    public function test_chain_in_to_string(): void
    {
        $rule = $this->chain()->nullable()->in(['yes', 'no']);

        $this->assertEquals('nullable|in:yes,no', $rule->toString());
    }

    public function test_chain_current_year(): void
    {
        $rule = $this->chain()->nullable()->currentYear();

        $this->assertEquals(['nullable', 'max:' . (date('Y') + 1)], $rule->toArray());
    }



    public function test_chain_min_year(): void
    {
        $rule = $this->chain()->nullable()->minYear(2005);

        $this->assertEquals(['nullable', 'integer', 'digits:4', 'min:' . 2005], $rule->toArray());
    }
    public function test_chain_max_year(): void
    {
        $rule = $this->chain()->nullable()->maxYear(2005);

        $this->assertEquals(['nullable', 'integer', 'digits:4', 'max:' . 2005], $rule->toArray());
    }
    public function test_chain_regex_year_range(): void
    {
        $rule = $this->chain()->nullable()->regexYearRange();

        $this->assertEquals(['nullable', 'regex:/^\d{4}-\d{4}$/'], $rule->toArray());
    }



    public function test_chain_all_simple_rules(): void
    {
        $rule = ChainRule::make()
            ->ascii()->accepted()->activeUrl()->alpha()->alphabetAndNumber()
            ->alphaDash()->array()->bail()->boolean()->confirmed()->date()->declined()->distinct()->email()
            ->file()->filled()->get()->image()
            ->inspect()
            ->integer()
            ->ip()
            ->ipv4()
            ->ipv6()
            ->json()
            ->lowercase()
            ->macAddress()
            ->nullable()
            ->numeric()
            ->required()
            ->string()
            ->sometimes()
            ->uppercase()
            ->present()
            ->password()
            ->prohibited()
            ->timezone()
            ->update()
            ->url()
            ->uuid()
            ->regexYearRange();

        $this->assertEquals([
            'ascii',
            'accepted',
            'active_url',
            'alpha',
            'alpha_num',
            'alpha_dash',
            'array',
            'bail',
            'boolean',
            'confirmed',
            'date',
            'declined',
            'distinct',
            'email',
            'file',
            'filled',
            'get',
            'image',
            'inspect',
            'integer',
            'ip',
            'ipv4',
            'ipv6',
            'json',
            'lowercase',
            'mac_address',
            'nullable',
            'numeric',
            'required',
            'string',
            'sometimes',
            'uppercase',
            'present',
            'password',
            'prohibited',
            'timezone',
            'update',
            'url',
            'uuid',
            'regex:/^\d{4}-\d{4}$/',
        ], $rule->toArray());
    }

    public function test_chain_parameterized_rules(): void
    {
        $rule = ChainRule::make()
            ->after('2025-01-01')
            ->afterOrEqual('2025-01-01')
            ->between(1, 10)
            ->before('2024-01-01')
            ->currentPassword('secret')
            ->endsWith('xyz')
            ->dimensions(['min_width=100', 'min_height=200'])
            ->dateFormat('Y-m-d')
            ->dateEquals('2025-09-22')
            ->decimal(2, 4)
            ->declinedIf('status', 'pending')
            ->different('username')
            ->digits(6)
            ->digitsBetween(3, 5)
            ->doesntEndWith('tmp')
            ->doesntStartWith('test')
            ->greaterThan('age')
            ->greaterThanOrEqual('score')
            ->in(['draft', 'published'])
            ->has('profile')
            ->inArray('users')
            ->lessThan('limit')
            ->lessThanOrEqual('balance')
            ->max(100)
            ->maxDigits(9)
            ->mimes(['jpg', 'png'])
            ->mimeTypes(['image/jpeg', 'image/png'])
            ->minDigits(3)
            ->multipleOf(5)
            ->min(10)
            ->notIn(['spam', 'banned'])
            ->notRegex('/foo/')
            ->regex('/bar/')
            ->requiredArrayKeys(['name', 'email'])
            ->requiredIf('status', 'draft')
            ->requiredUnless('role', 'admin')
            ->requiredWith('token')
            ->requiredWithout('avatar')
            ->requiredWithoutAll('role', 'guest')
            ->same('password')
            ->startsWith('pre')
            ->prohibitedIf('type', 'admin')
            ->maxYear(2025)
            ->minYear(2000);

        $this->assertEquals([
            'after:2025-01-01',
            'after_or_equal:2025-01-01',
            'between:1,10',
            'before:2024-01-01',
            'current_password:secret',
            'ends_with:xyz',
            'dimensions:min_width=100,min_height=200',
            'date_format:Y-m-d',
            'date_equals:2025-09-22',
            'decimal:2,4',
            'declined_if:status,pending',
            'different:username',
            'digits:6',
            'digits_between:3,5',
            'doesnt_end_with:tmp',
            'doesnt_start_with:test',
            'gt:age',
            'gte:score',
            'in:draft,published',
            'has:profile',
            'in_array:users.*',
            'lt:limit',
            'lte:balance',
            'max:100',
            'max_digits:9',
            'mimes:jpg,png',
            'mimetypes:image/jpeg,image/png',
            'min_digits:3',
            'multiple_of:5',
            'min:10',
            'not_in:spam,banned',
            'not_regex:/foo/',
            'regex:/bar/',
            'required_array_keys:name,email',
            'required_if:status,draft',
            'required_unless:role,admin',
            'required_with:token',
            'required_without:avatar',
            'required_without_all:role,guest',
            'same:password',
            'starts_with:pre',
            'prohibited_if:type,admin',
            'integer',
            'digits:4',
            'max:2025',
            'integer',
            'digits:4',
            'min:2000',
        ], $rule->toArray());
    }



}
