<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Topup implements Rule
{

    public $type;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($param)
    {
        $this->type = $param;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $minTopup = config("carbonclick.{$this->type}.topup");
        return ($value >= $minTopup);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $minTopup = config("carbonclick.{$this->type}.topup");
        return "Preferred topup must not be less than {$minTopup}.";
    }
}
