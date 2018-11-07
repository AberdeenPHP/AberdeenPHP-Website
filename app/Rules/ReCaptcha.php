<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use ReCaptcha\ReCaptcha as ReCaptchaClient;

class ReCaptcha implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (config('app.env') !== 'production') {
            return true;
        }

        $recaptcha = new ReCaptchaClient(env('RECAPTCHA_SECRET_KEY'));

        $response = $recaptcha->verify($value, request()->ip());

        if (!$response->isSuccess()) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Unable to verify you are not a robot. Please try again.';
    }
}
