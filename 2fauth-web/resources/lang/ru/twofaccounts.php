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

    'service' => 'Service',
    'account' => 'Account',
    'accounts' => 'Accounts',
    'icon' => 'Icon',
    'icon_for_account_x_at_service_y' => 'Icon of the {account} account at {service}',
    'icon_to_illustrate_the_account' => 'Icon that illustrates the account',
    'remove_icon' => 'Remove icon',
    'no_account_here' => 'No 2FA here!',
    'add_first_account' => 'Pick a method and add your first account',
    'use_full_form' => 'Or use the full form',
    'add_one' => 'Add one',
    'show_qrcode' => 'Show QR code',
    'no_service' => '- no service -',
    'account_created' => 'Account successfully created',
    'account_updated' => 'Account successfully updated',
    'accounts_deleted' => 'Account(s) successfully deleted',
    'accounts_moved' => 'Account(s) successfully moved',
    'export_selected_to_json' => 'Download a json export of selected accounts',
    'forms' => [
        'service' => [
            'placeholder' => 'Google, Twitter, Apple',
        ],
        'account' => [
            'placeholder' => 'John DOE',
        ],
        'new_account' => 'New account',
        'edit_account' => 'Edit account',
        'otp_uri' => 'OTP Uri',
        'scan_qrcode' => 'Scan a QR code',
        'upload_qrcode' => 'Upload a QR code',
        'use_advanced_form' => 'Use the advanced form',
        'prefill_using_qrcode' => 'Prefill using a QR Code',
        'use_qrcode' => [
            'val' => 'Use a qrcode',
            'title' => 'Use a QR code to fill the form magically',
        ],
        'unlock' => [
            'val' => 'Unlock',
            'title' => 'Unlock it (at your own risk)',
        ],
        'lock' => [
            'val' => 'Lock',
            'title' => 'Lock it',
        ],
        'choose_image' => 'Upload',
        'i_m_lucky' => 'Try my luck',
        'i_m_lucky_legend' => 'The "Try my luck" button try to get the official icon of the given service. Enter actual service name without ".xyz" extension and try to avoid typo. (beta feature)',
        'test' => 'Test',
        'secret' => [
            'label' => 'Secret',
            'help' => 'The key used to generate your security codes'
        ],
        'plain_text' => 'Plain text',
        'otp_type' => [
            'label' => 'Choose the type of <abbr title="One-Time Password">OTP</abbr> to create',
            'help' => 'Time-based OTP or HMAC-based OTP or Steam OTP'
        ],
        'digits' => [
            'label' => 'Digits',
            'help' => 'The number of digits of the generated security codes'
        ],
        'algorithm' => [
            'label' => 'Algorithm',
            'help' => 'The algorithm used to secure your security codes'
        ],
        'period' => [
            'label' => 'Period',
            'placeholder' => 'Default is 30',
            'help' => 'The period of validity of the generated security codes in second'
        ],
        'counter' => [
            'label' => 'Counter',
            'placeholder' => 'Default is 0',
            'help' => 'The initial counter value',
            'help_lock' => 'It is risky to edit the counter as you can desynchronize the account with the verification server of the service. Use the lock icon to enable modification, but only if you know for you are doing'
        ],
        'image' => [
            'label' => 'Image',
            'placeholder' => 'http://...',
            'help' => 'The url of an external image to use as the account icon'
        ],
        'options_help' => 'You can leave the following options blank if you don\'t know how to set them. The most commonly used values will be applied.',
        'alternative_methods' => 'Alternative methods',
    ],
    'stream' => [
        'live_scan_cant_start' => 'Live scan can\'t start :(',
        'need_grant_permission' => [
            'reason' => '2FAuth does not have permission to access your camera',
            'solution' => 'You need to grant permission to use your device camera. If you already denied and your browser do not prompt you again, please refers to the browser documentation to find out how to grant permission.'
        ],
        'not_readable' => [
            'reason' => 'Fail to load scanner',
            'solution' => 'Is the camera already in use? Ensure that no other app use your camera and try again'
        ],
        'no_cam_on_device' => [
            'reason' => 'No camera on this device',
            'solution' => 'Maybe you forgot to plug in your webcam'
        ],
        'secured_context_required' => [
            'reason' => 'Secure context required',
            'solution' => 'HTTPS is required for live scan. If you run 2FAuth from your computer, do not use virtual host other than localhost'
        ],
        'https_required' => 'HTTPS required for camera streaming',
        'camera_not_suitable' => [
            'reason' => 'Installed cameras are not suitable',
            'solution' => 'Please use another device/camera'
        ],
        'stream_api_not_supported' => [
            'reason' => 'Stream API is not supported in this browser',
            'solution' => 'You should use a modern browser'
        ],
    ],
    'confirm' => [
        'delete' => 'Are you sure you want to delete this account?',
        'cancel' => 'The account will be lost. Are you sure?',
        'discard' => 'Are you sure you want to discard this account?',
        'discard_all' => 'Are you sure you want to discard all accounts?',
        'discard_duplicates' => 'Are you sure you want to discard all duplicates?',
    ],
    'import' => [
        'import' => 'Import',
        'to_import' => 'Import',
        'import_legend' => '2FAuth can import data from various 2FA apps.<br />Use the Export feature of these apps to get a migration resource (a QR code or a file) and load it using your preferred method below.',
        'upload' => 'Upload',
        'scan' => 'Scan',
        'supported_formats_for_qrcode_upload' => 'Accepted: jpg, jpeg, png, bmp, gif, svg, or webp',
        'supported_formats_for_file_upload' => 'Accepted: Plain text, json, 2fas',
        'supported_migration_formats' => 'Supported migration formats',
        'qr_code' => 'QR Code',
        'plain_text' => 'Plain text',
        'issuer' => 'Issuer',
        'imported' => 'Imported',
        'failure' => 'Failure',
        'x_valid_accounts_found' => '{count} valid accounts found',
        'import_all' => 'Import all',
        'import_this_account' => 'Import this account',
        'discard_all' => 'Discard all',
        'discard_duplicates' => 'Discard duplicates',
        'discard_this_account' => 'Discard this account',
        'generate_a_test_password' => 'Generate a test pasword',
        'possible_duplicate' => 'An account with the exact same data already exists',
        'invalid_account' => '- invalid account -',
        'invalid_service' => '- invalid service -',
        'do_not_set_password_or_encryption' => 'Do NOT enable Password protection or Encryption when you export data (from a 2FA app) you want to import into 2FAuth.',
    ],

];