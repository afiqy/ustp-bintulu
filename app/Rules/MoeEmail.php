<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MoeEmail implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/@moe\.gov\.my$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be a valid email from @moe.gov.my domain.';
    }
}
