<?php

namespace Wavey\LaravelGravatar;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Gravatar
{
    /**
     * Generate the Gravatar URL.
     *
     * @param string $email
     * @return string
     * @throws EmailException
     */
    public function generate(string $email): string
    {
        $this->validate($email);
        $hash = $this->generateEmailHash($email);
        return $this->generateUrl($hash);
    }

    /**
     * Put together the Gravatar URL.
     *
     * @param $hash
     * @return string
     */
    private function generateUrl($hash): string
    {
        return config('gravatar.base_url')
            . $hash
            . '.' . config('gravatar.default_format')
            . '?s=' . config('gravatar.default_size')
            . '&d=' . config('gravatar.default_image')
            . '&r=' . config('gravatar.default_rating');
    }

    /**
     * Generate the email hash.
     *
     * @param string $email
     * @return string
     */
    private function generateEmailHash(string $email): string
    {
        return Str::lower(md5($email));
    }

    /**
     * Validate the given email address.
     *
     * @param string $email
     * @return void
     * @throws EmailException
     */
    private function validate(string $email): void
    {
        $validator = Validator::make(['email' => $email], [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            throw new EmailException('Invalid email provided');
        }
    }
}
