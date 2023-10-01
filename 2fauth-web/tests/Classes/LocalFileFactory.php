<?php

namespace Tests\Classes;

use Illuminate\Http\Testing\File;
use Tests\Data\MigrationTestData;
use Tests\Data\OtpTestData;

class LocalFileFactory
{
    /**
     * Create a new local valid qrcode image.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function validQrcode()
    {
        return new File('validQrcode.png', tap(tmpfile(), function ($temp) {
            ob_start();

            $data = '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';

            $data = base64_decode($data);

            $image = imagecreatefromstring($data);
            imagepng($image);

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local invalid qrcode image.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function invalidQrcode()
    {
        return new File('invalidQrcode.png', tap(tmpfile(), function ($temp) {
            ob_start();

            $data = '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';

            $data = base64_decode($data);

            $image = imagecreatefromstring($data);
            imagepng($image);

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local valid Aegis JSON file.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function validAegisJsonFile()
    {
        return new File('validAegisMigration.json', tap(tmpfile(), function ($temp) {
            ob_start();

            echo MigrationTestData::VALID_AEGIS_JSON_MIGRATION_PAYLOAD;

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local invalid Aegis JSON file.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function invalidAegisJsonFile()
    {
        return new File('invalidAegisMigration.json', tap(tmpfile(), function ($temp) {
            ob_start();

            echo MigrationTestData::INVALID_AEGIS_JSON_MIGRATION_PAYLOAD;

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local encrypted Aegis JSON file.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function encryptedAegisJsonFile()
    {
        return new File('encryptedAegisJsonFile.txt', tap(tmpfile(), function ($temp) {
            ob_start();

            echo MigrationTestData::ENCRYPTED_AEGIS_JSON_MIGRATION_PAYLOAD;

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local valid Plain Text file.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function validPlainTextFile()
    {
        return new File('validPlainTextFile.txt', tap(tmpfile(), function ($temp) {
            ob_start();

            echo OtpTestData::TOTP_FULL_CUSTOM_URI;
            echo PHP_EOL;
            echo OtpTestData::HOTP_FULL_CUSTOM_URI;
            echo PHP_EOL;
            echo OtpTestData::STEAM_TOTP_URI;

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local valid Plain Text file with new lines.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function validPlainTextFileWithNewLines()
    {
        return new File('validPlainTextFileWithNewLines.txt', tap(tmpfile(), function ($temp) {
            ob_start();

            echo PHP_EOL;
            echo OtpTestData::TOTP_FULL_CUSTOM_URI;
            echo PHP_EOL;
            echo PHP_EOL;
            echo OtpTestData::HOTP_FULL_CUSTOM_URI;
            echo PHP_EOL;
            echo PHP_EOL;
            echo OtpTestData::STEAM_TOTP_URI;
            echo PHP_EOL;

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local invalid Plain Text file with no URI.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function invalidPlainTextFileNoUri()
    {
        return new File('invalidPlainTextFileNoUri.txt', tap(tmpfile(), function ($temp) {
            ob_start();

            echo 'lorem ipsum';
            echo PHP_EOL;
            echo 'lorem ipsum';

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local invalid Plain Text file with invalid line.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function invalidPlainTextFileWithInvalidLine()
    {
        return new File('invalidPlainTextFileWithInvalidLine.txt', tap(tmpfile(), function ($temp) {
            ob_start();

            echo OtpTestData::TOTP_FULL_CUSTOM_URI;
            echo PHP_EOL;
            echo 'lorem ipsum';
            echo PHP_EOL;
            echo OtpTestData::HOTP_FULL_CUSTOM_URI;

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local invalid Plain Text file with invalid URI.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function invalidPlainTextFileWithInvalidUri()
    {
        return new File('invalidPlainTextFileWithInvalidUri.txt', tap(tmpfile(), function ($temp) {
            ob_start();

            echo OtpTestData::TOTP_FULL_CUSTOM_URI;
            echo PHP_EOL;
            echo OtpTestData::INVALID_OTPAUTH_URI;
            echo PHP_EOL;
            echo OtpTestData::HOTP_FULL_CUSTOM_URI;

            fwrite($temp, ob_get_clean());
        }));
    }

    /**
     * Create a new local empty Plain Text file.
     *
     * @return \Illuminate\Http\Testing\File
     */
    public function invalidPlainTextFileEmpty()
    {
        return new File('invalidPlainTextFileEmpty.txt', tap(tmpfile(), function ($temp) {
            ob_start();

            echo '';

            fwrite($temp, ob_get_clean());
        }));
    }
}
