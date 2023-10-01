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
    'reset' => 'Ваш пароль был сброшен!',
    'sent' => 'Ссылка на сброс пароля была отправлена!',
    'throttled' => 'Пожалуйста, подождите перед повторной попыткой.',
    'token' => 'Ошибочный код сброса пароля.',
    'user' => "Не удалось найти пользователя с указанным электронным адресом.",

    // 2FAuth
    'password' => 'Пароль должен содержать не менее восьми символов и совпадать с паролем в поле "подтверждение пароля".',
    
];
