<?php

declare(strict_types=1);

namespace App\Data;

use Carbon\CarbonInterface;
use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        #[Max(255)]
        public readonly string $name,
        #[Max(255), Email]
        public readonly string $email,
        public readonly ?string $password,
        public readonly ?CarbonInterface $email_verified_at,
        public readonly ?CarbonInterface $created_at,
        public readonly ?CarbonInterface $updated_at,
    ) {}
}
