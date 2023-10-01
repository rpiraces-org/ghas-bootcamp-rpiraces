<?php

namespace Database\Factories;

use ParagonIE\ConstantTime\Base32;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TwoFAccount>
 */
class TwoFAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $account = $this->faker->safeEmail();
        $service = $this->faker->domainName();
        $secret = Base32::encodeUpper($this->faker->regexify('[A-Z0-9]{8}'));
    
        return [
            'group_id' => null,
            'otp_type' => 'totp',
            'account' => $account,
            'service' => $service,
            'secret' => $secret,
            'algorithm' => 'sha1',
            'digits' => 6,
            'period' => 30,
            'legacy_uri' => 'otpauth://hotp/' . $service . ':' . $account . '?secret=' . $secret . '&issuer=' . $service,
            'icon' => '',
        ];
    }
}