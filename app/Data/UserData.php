<?php

namespace App\Data;

use Carbon\CarbonInterface;
use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly ?CarbonInterface $email_verified_at,
        public readonly ?CarbonInterface $created_at,
        public readonly ?CarbonInterface $updated_at,
    ) {
    }
}
