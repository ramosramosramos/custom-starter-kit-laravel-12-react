<?php

declare(strict_types=1);
use Illuminate\Support\Carbon;

/**
 * @return Carbon
 */
if (! function_exists('carbon')) {

    function carbon(): Carbon
    {
        // Your helper logic here
        return new Carbon();
    }
}
