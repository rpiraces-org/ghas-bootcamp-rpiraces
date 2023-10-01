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
    'failed' => '用户名或密码错误',
    'password' => '提供的密码不正确',
    'throttle' => '您尝试的登录次数过多，请 :seconds 秒后再试。',

    // 2FAuth
    'sign_out' => '登出',
    'sign_in' => '登录',
    'sign_in_using' => '登录使用',
    'sign_in_using_security_device' => '使用安全设备登录',
    'login_and_password' => '用户名和密码',
    'register' => '注册',
    'welcome_to_2fauth' => '欢迎使用 2FAuth',
    'autolock_triggered' => '已自动锁定',
    'autolock_triggered_punchline' => '自动锁定已触发。您已被自动断开连接。',
    'change_autolock_in_settings' => '您可以在“设置 > 选项”中更改自动锁定的行为。',
    'already_authenticated' => '已验证',
    'authentication' => '身份认证',
    'maybe_later' => '以后再说',
    'user_account_controlled_by_proxy' => '用户帐户由身份验证代理提供。<br />请在代理中管理帐户。',
    'auth_handled_by_proxy' => '身份验证由代理处理，下面的设置被禁用。<br />在代理管理身份验证。',
    'confirm' => [
        'logout' => '您确定要注销吗？',
        'revoke_device' => '你确定要删除此设备？',
        'delete_account' => '您确定要删除您的账户?',
    ],
    'webauthn' => [
        'security_device' => '硬件安全密钥',
        'security_devices' => '安全设备',
        'security_devices_legend' => '您可以用来登录2FAuth的认证设备，例如安全密钥(如Yubikey)或具有生物识别能力的智能手机(如Apple Face Id/TouchId)',
        'enhance_security_using_webauthn' => '您可以通过启用 WebAuthn 身份验证来增强您的2FAuth 账户的安全性。<br /><br />
WebAuthn允许您使用受信任的设备 (如Yubikeys 或具有生物识别能力的智能手机) 快速和更安全地登录。',
        'use_security_device_to_sign_in' => '准备好使用您的（一个）安全设备进行身份验证。请插入您的密钥，移除口罩或手套等。',
        'lost_your_device' => '设备丢失？',
        'recover_your_account' => '恢复您的账号',
        'account_recovery' => '恢复账号',
        'recovery_punchline' => '2FAuth 将向您发送恢复链接到此电子邮件地址。点击收到电子邮件中的链接注册新的安全设备。<br /><br />确保在您可以在自己的设备上打开电子邮件。',
        'send_recovery_link' => '发送恢复链接',
        'account_recovery_email_sent' => '账号恢复邮件已发送！',
        'disable_all_security_devices' => '禁用所有安全设备',
        'disable_all_security_devices_help' => '您的所有安全设备都将被撤销。如果您丢失了一个设备或其安全性已经受到损害，请使用此选项。',
        'register_a_new_device' => '注册新设备',
        'register_a_device' => '注册设备',
        'device_successfully_registered' => '成功注册设备',
        'device_revoked' => '成功注销设备',
        'revoking_a_device_is_permanent' => '注销设备是永久性的',
        'recover_account_instructions' => '若要恢复您的帐户，2FAuth 将会重置一些Webauth设置，以便您可以使用您的电子邮件和密码登录。',
        'invalid_recovery_token' => '无效的恢复密钥',
        'webauthn_login_disabled' => 'Webauthn 登录已被禁用',
        'invalid_reset_token' => '此密码重置令牌无效',
        'rename_device' => '重命名设备',
        'my_device' => '我的设备',
        'unknown_device' => '未知设备',
        'use_webauthn_only' => [
            'label' => '仅使用 WebAuthn',
            'help' => '将WebAuthn设定为登录2FAuth账户的唯一授权的登录方式。推荐启用此选项，并利用WebAuth增强安全性。<br /><br />
                设备丢失时， 您可以通过重置此选项并使用您的电子邮件和密码登录来恢复您的帐户。<br /><br />
                请注意！ 尽管启用了此选项，输入电子邮件和密码的登录界面仍然可用，但是会提示 “身份验证失败”。'
        ],
        'need_a_security_device_to_enable_options' => '设置至少一个WebAuth设备以启用以下选项',
    ],
    'forms' => [
        'name' => '用户名',
        'login' => '登录',
        'webauthn_login' => '使用 WebAuthn 登录',
        'email' => '邮箱',
        'password' => '密码',
        'reveal_password' => '显示密码',
        'hide_password' => '隐藏密码',
        'confirm_password' => '确认密码',
        'confirm_new_password' => '确认新密码',
        'dont_have_account_yet' => '还没有账号？',
        'already_register' => '已经注册？',
        'authentication_failed' => '验证失败',
        'forgot_your_password' => '忘记密码？',
        'request_password_reset' => '重置密码',
        'reset_your_password' => '重置你的密码',
        'reset_password' => '重置密码',
        'disabled_in_demo' => '此功能将在演示模式下禁用。',
        'new_password' => '新密码',
        'current_password' => [
            'label' => '当前密码',
            'help' => '填写您当前设置的密码以确认是您本人'
        ],
        'change_password' => '修改密码',
        'send_password_reset_link' => '发送密码重置链接',
        'password_successfully_changed' => '密码修改成功',
        'edit_account' => '编辑账户',
        'profile_saved' => '个人资料更新成功！',
        'welcome_to_demo_app_use_those_credentials' => '欢迎访问 2FAuth 的演示站点。<br><br>您可以使用电子邮件地址 <strong>demo@2fauth.app</strong> 和密码 <strong>demo</strong>来登录。',
        'welcome_to_testing_app_use_those_credentials' => '欢迎访问 2FAuth 的测试实例。<br><br>您可以使用电子邮件地址 <strong>testing@2fauth.app</strong> 和密码 <strong>password</strong>来登录。',
        'register_punchline' => '欢迎使用 <b>2FAuth</b>。<br/>您需要一个账号才能继续，请先完成注册。',
        'reset_punchline' => '2FAuth 将向您发送密码重置链接到此邮箱。请点击收到的电子邮件中的链接设置新密码。',
        'name_this_device' => '命名此设备',
        'delete_account' => '删除账户',
        'delete_your_account' => '删除您的账户',
        'delete_your_account_and_reset_all_data' => '这将重置您的 2FAuth。您的账号以及所有的 2FA 数据都将被删除，这是一个不可逆的操作。',
        'user_account_successfully_deleted' => '账号已成功删除',
        'has_lower_case' => '包含小写字母',
        'has_upper_case' => '包含大写字母',
        'has_special_char' => '包含特殊字符',
        'has_number' => '包含数字',
        'is_long_enough' => '至少 8 个字符',
        'mandatory_rules' => '必选项',
        'optional_rules_you_should_follow' => '建议（推荐）',
        'caps_lock_is_on' => '大写锁定已开启',
    ],

];
