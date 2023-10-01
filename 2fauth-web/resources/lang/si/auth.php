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
   
    // Laravel
    'failed' => 'මෙම අක්තපත්ර අපගේ වාර්තා වලට ගැලපෙන්නේ නැත.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'බොහෝ පිවිසුම් උත්සහයන් සිදු කර ඇත. කරුණාකර නැවත උත්සාහ කරන්න: තත්පර තත්පර.',

    // 2FAuth
    'sign_out' => 'වරන්න',
    'sign_in' => 'පුරන්න',
    'sign_in_using' => 'Sign in using',
    'sign_in_using_security_device' => 'Sign in using a security device',
    'login_and_password' => 'login & password',
    'register' => 'ලියාපදිංචි වන්න',
    'welcome_to_2fauth' => 'Welcome to 2FAuth',
    'autolock_triggered' => 'Auto lock triggered',
    'autolock_triggered_punchline' => 'The event watched by the Auto Lock feature has fired. You\'ve been automatically disconnected.',
    'change_autolock_in_settings' => 'You can change the behavior of the Autolock feature in Settings > Options tab.',
    'already_authenticated' => 'Already authenticated',
    'authentication' => 'Authentication',
    'maybe_later' => 'Maybe later',
    'user_account_controlled_by_proxy' => 'User account made available by an authentication proxy.<br />Manage the account at proxy level.',
    'auth_handled_by_proxy' => 'Authentication handled by a reverse proxy, below settings are disabled.<br />Manage authentication at proxy level.',
    'confirm' => [
        'logout' => 'Are you sure you want to log out?',
        'revoke_device' => 'Are you sure you want to revoke this device?',
        'delete_account' => 'Are you sure you want to delete your account?',
    ],
    'webauthn' => [
        'security_device' => 'a security device',
        'security_devices' => 'Security devices',
        'security_devices_legend' => 'Authentication devices you can use to sign in 2FAuth, like security keys (i.e Yubikey) or smartphones with biometric capabilities (i.e. Apple FaceId/TouchId)',
        'enhance_security_using_webauthn' => 'You can enhance the security of your 2FAuth account by enabling WebAuthn authentication.<br /><br />
            WebAuthn allows you to use trusted devices (like Yubikeys or smartphones with biometric capabilities) to sign in quickly and more securely.',
        'use_security_device_to_sign_in' => 'Get ready to authenticate using (one of) your security devices. Plug your key in, remove face mask or gloves, etc.',
        'lost_your_device' => 'Lost your device?',
        'recover_your_account' => 'Recover your account',
        'account_recovery' => 'Account recovery',
        'recovery_punchline' => '2FAuth will send you a recovery link to this email address. Click the link in the received email and follow the instructions.<br /><br />Ensure you open the email on a device you fully own.',
        'send_recovery_link' => 'Send recovery link',
        'account_recovery_email_sent' => 'Account recovery email sent!',
        'disable_all_security_devices' => 'Disable all security devices',
        'disable_all_security_devices_help' => 'All your security devices will be revoked. Use this option if you have lost one or its security has been compromised.',
        'register_a_new_device' => 'Register a new device',
        'register_a_device' => 'Register a device',
        'device_successfully_registered' => 'Device successfully registered',
        'device_revoked' => 'Device successfully revoked',
        'revoking_a_device_is_permanent' => 'Revoking a device is permanent',
        'recover_account_instructions' => 'To recover your account, 2FAuth resets some Webauthn settings so you will be able to sign in using your email and password.',
        'invalid_recovery_token' => 'Invalid recovery token',
        'webauthn_login_disabled' => 'Webauthn login disabled',
        'invalid_reset_token' => 'This reset token is invalid.',
        'rename_device' => 'Rename device',
        'my_device' => 'My device',
        'unknown_device' => 'Unknown device',
        'use_webauthn_only' => [
            'label' => 'Use WebAuthn only',
            'help' => 'Make WebAuthn the only authorized method to log into your 2FAuth account. This is the recommended setup to take advantage of the WebAuthn enhanced security.<br /><br />
                In case of device lost, you will be able to recover your account by resetting this option and signing in using your email and password.<br /><br />
                Attention! The Email & Password form remains available despite this option being enabled, but it will always return an \'Authentication failed\' response.'
        ],
        'need_a_security_device_to_enable_options' => 'Set at least one device to enable the following options',
    ],
    'forms' => [
        'name' => 'නම',
        'login' => 'පිවිසෙන්න',
        'webauthn_login' => 'WebAuthn login',
        'email' => 'විද්‍යුත් තැපෑල',
        'password' => 'මුර පදය',
        'reveal_password' => 'Reveal password',
        'hide_password' => 'Hide password',
        'confirm_password' => 'මුරපදය තහවුරු කරන්න',
        'confirm_new_password' => 'නව මුර පදය තහවුරු කරන්න',
        'dont_have_account_yet' => 'Don\'t have your account yet?',
        'already_register' => 'දැනටමත් ලියාපදිංචි වී ඇත්ද ?',
        'authentication_failed' => 'Authentication failed',
        'forgot_your_password' => 'මුරපදය අමතක වුනාද?',
        'request_password_reset' => 'නැවත සකසන්න',
        'reset_your_password' => 'Reset your password',
        'reset_password' => 'මුරපදය නැවත සකසන්න',
        'disabled_in_demo' => 'Feature disabled in Demo mode',
        'new_password' => 'නව මුරපදය',
        'current_password' => [
            'label' => 'වත්මන් මුරපදය',
            'help' => 'Fill in your current password to confirm that it\'s you'
        ],
        'change_password' => 'මුරපදය වෙනස් කරන්න',
        'send_password_reset_link' => 'මුරපදය නැවත සැකසීමේ සබැඳිය යවන්න',
        'password_successfully_changed' => 'මුරපදය සාර්ථකව වෙනස් කෙරිණි',
        'edit_account' => 'ගිණුම සංස්කරණය',
        'profile_saved' => 'පැතිකඩ සාර්ථකව යාවත්කාල කෙරිණි!',
        'welcome_to_demo_app_use_those_credentials' => 'Welcome to the 2FAuth demo.<br><br>You can connect using the email address <strong>demo@2fauth.app</strong> and the password <strong>demo</strong>',
        'welcome_to_testing_app_use_those_credentials' => 'Welcome to the 2FAuth testing instance.<br><br>Use email address <strong>testing@2fauth.app</strong> and password <strong>password</strong>',
        'register_punchline' => 'Welcome to <b>2FAuth</b>.<br/>You need an account to go further, please register yourself.',
        'reset_punchline' => '2FAuth will send you a password reset link to this address. Click the link in the received email to set a new password.',
        'name_this_device' => 'Name this device',
        'delete_account' => 'Delete account',
        'delete_your_account' => 'Delete your account',
        'delete_your_account_and_reset_all_data' => 'This will reset 2FAuth. Your user account will be deleted as well as all 2FA data. There is no going back.',
        'user_account_successfully_deleted' => 'User account successfully deleted',
        'has_lower_case' => 'Has lower case',
        'has_upper_case' => 'Has upper case',
        'has_special_char' => 'Has special char',
        'has_number' => 'Has number',
        'is_long_enough' => '8 characters min.',
        'mandatory_rules' => 'Mandatory',
        'optional_rules_you_should_follow' => 'Recommanded (highly)',
        'caps_lock_is_on' => 'Caps lock is On',
    ],

];
