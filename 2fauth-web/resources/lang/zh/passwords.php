<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    // Laravel
    'reset' => '密码重置成功！',
    'sent' => '密码重置邮件已发送！',
    'throttled' => '请稍候再试。',
    'token' => '密码重置令牌无效。',
    'user' => "找不到该邮箱对应的用户。",

    // 2FAuth
    'password' => '密码必须包含至少8个字符，且两次输入的内容必须相同。',
    
];
