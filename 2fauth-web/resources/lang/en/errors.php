<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'resource_not_found' => 'Resource not found',
    'error_occured' => 'An error occured:',
    'refresh' => 'Refresh',
    'no_valid_otp' => 'No valid OTP resource in this QR code',
    'something_wrong_with_server' => 'Something is wrong with your server',
    'Unable_to_decrypt_uri' => 'Unable to decrypt uri',
    'not_a_supported_otp_type' => 'This OTP format is not currently supported',
    'cannot_create_otp_without_secret' => 'Cannot create an OTP without a secret',
    'data_of_qrcode_is_not_valid_URI' => 'The data of this QR code is not a valid OTP Auth URI. The QR code contains:',
    'wrong_current_password' => 'Wrong current password, nothing has changed',
    'error_during_encryption' => 'Encryption failed, your database remains unprotected.',
    'error_during_decryption' => 'Decryption failed, your database is still protected. This is mainly caused by an integrity issue of encrypted data for one or more accounts.',
    'qrcode_cannot_be_read' => 'This QR code is unreadable',
    'too_many_ids' => 'too many ids were included in the query parameter, max 100 allowed',
    'delete_user_setting_only' => 'Only user-created setting can be deleted',
    'indecipherable' => '*indecipherable*',
    'cannot_decipher_secret' => 'The secret cannot be deciphered. This is mainly caused by a wrong APP_KEY set in the .env configuration file of 2Fauth or a corrupted data stored in database.',
    'https_required' => 'HTTPS context required',
    'browser_does_not_support_webauthn' => 'Your device does not support webauthn. Try again later using a more modern browser',
    'aborted_by_user' => 'Aborted by user',
    'security_device_already_registered' => 'Device already registered',
    'not_allowed_operation' => 'Operation not allowed',
    'no_authenticator_support_specified_algorithms' => 'No authenticators support specified algorithms',
    'authenticator_missing_discoverable_credential_support' => 'Authenticator missing discoverable credential support',
    'authenticator_missing_user_verification_support' => 'Authenticator missing user verification support',
    'unknown_error' => 'Unknown error',
    'security_error_check_rpid' => 'Security error<br/>Check your WEBAUTHN_ID env var',
    '2fauth_has_not_a_valid_domain' => '2FAuth\'s domain is not a valid domain',
    'user_id_not_between_1_64' => 'User ID was not between 1 and 64 chars',
    'no_entry_was_of_type_public_key' => 'No entry was of type "public-key"',
    'unsupported_with_reverseproxy' => 'Not applicable when using an auth proxy',
    'user_deletion_failed' => 'User account deletion failed, no data have been deleted',
    'auth_proxy_failed' => 'Proxy authentication failed',
    'auth_proxy_failed_legend' => '2Fauth is configured to run behind an authentication proxy but your proxy does not return the expected header. Check your configuration and try again.',
    'invalid_x_migration' => 'Invalid or unreadable :appname data',
    'invalid_2fa_data' => 'Invalid 2FA data',
    'unsupported_migration' => 'Data do not match any supported format',
    'unsupported_otp_type' => 'Unsupported OTP type',
    'encrypted_migration' => 'Unreadable, the data seem encrypted',
    'no_logo_found_for_x' => 'No logo available for {service}',
    'file_upload_failed' => 'File upload failed',
    'unauthorized' => 'Unauthorized',
    'unauthorized_legend' => 'You do not have permissions to view this resource or to perform this action',
    'cannot_delete_the_only_admin' => 'Cannot delete the only admin account'
];