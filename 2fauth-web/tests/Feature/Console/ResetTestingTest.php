<?php

namespace Tests\Feature\Console;

use Illuminate\Support\Facades\Config;
use Tests\FeatureTestCase;

class ResetTestingTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function test_reset_testing_without_testing_mode_succeeded()
    {
        $this->artisan('2fauth:reset-testing')
             ->expectsOutput('2fauth:reset-testing can only run when isTestingApp option is On')
             ->assertSuccessful();
    }

    /**
     * @test
     */
    public function test_reset_testing_succeeded()
    {
        Config::set('2fauth.config.isTestingApp', true);

        $this->artisan('2fauth:reset-testing')
             ->expectsOutput('This will reset the app in order to run a clean and fresh testing app.')
             ->expectsQuestion('To prevent any mistake please type the word "testing" to go on', 'testing')
             ->assertSuccessful();

        $this->assertDatabaseCount('twofaccounts', 9);

        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'account'    => 'johndoe@facebook.com',
            'service'    => 'Facebook',
            'secret'     => 'A4GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'facebook.png',
            'legacy_uri' => 'otpauth://totp/Facebook:johndoe@facebook.com?secret=A4GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'service'    => 'Twitter',
            'account'    => '@john',
            'secret'     => 'A2GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'twitter.png',
            'legacy_uri' => 'otpauth://totp/Twitter:@john?secret=A2GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'service'    => 'Instagram',
            'account'    => '@johndoe',
            'secret'     => 'A6GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'instagram.png',
            'legacy_uri' => 'otpauth://totp/Instagram:@johndoe?secret=A6GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'service'    => 'LinkedIn',
            'account'    => '@johndoe',
            'secret'     => 'A7GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'linkedin.png',
            'legacy_uri' => 'otpauth://totp/LinkedIn:@johndoe?secret=A7GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'account'    => 'johndoe',
            'service'    => 'Amazon',
            'secret'     => 'A7GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'amazon.png',
            'legacy_uri' => 'otpauth://totp/Amazon:johndoe?secret=A7GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'account'    => 'john.doe@icloud.com',
            'service'    => 'Apple',
            'secret'     => 'A2GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'apple.png',
            'legacy_uri' => 'otpauth://totp/Apple:john.doe@icloud.com?secret=A2GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'account'    => 'john.doe',
            'service'    => 'Dropbox',
            'secret'     => 'A3GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'dropbox.png',
            'legacy_uri' => 'otpauth://totp/Dropbox:john.doe?secret=A3GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'account'    => '@john',
            'service'    => 'Github',
            'secret'     => 'A2GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'github.png',
            'legacy_uri' => 'otpauth://totp/Github:@john?secret=A2GRFTVVRBGY7UIW',
        ]);
        $this->assertDatabaseHas('twofaccounts', [
            'otp_type'   => 'totp',
            'service'    => 'Google',
            'account'    => 'john.doe@gmail.com',
            'secret'     => 'A5GRFTVVRBGY7UIW',
            'algorithm'  => 'sha1',
            'digits'     => 6,
            'period'     => 30,
            'icon'       => 'google.png',
            'legacy_uri' => 'otpauth://totp/Google:john.doe@gmail.com?secret=A5GRFTVVRBGY7UIW',
        ]);
    }

    /**
     * @test
     */
    public function test_reset_testing_with_invalid_confirmation_succeeded()
    {
        Config::set('2fauth.config.isTestingApp', true);

        $this->artisan('2fauth:reset-testing')
             ->expectsQuestion('To prevent any mistake please type the word "testing" to go on', 'null')
             ->expectsOutput('Bad confirmation word, nothing appened')
             ->assertSuccessful();
    }

    /**
     * @test
     */
    public function test_reset_testing_with_no_confirm_option_succeeded()
    {
        Config::set('2fauth.config.isTestingApp', true);

        $this->artisan('2fauth:reset-testing --no-confirm')
             ->assertSuccessful();
    }
}
