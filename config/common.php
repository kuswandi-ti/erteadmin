<?php

return [

    'path_storage' => env('PATH_STORAGE'),

    'path_template' => env('PATH_TEMPLATE'),
    'path_template_web' => env('PATH_TEMPLATE_WEB'),
    'path_template_mobile' => env('PATH_TEMPLATE_MOBILE'),

    'url_global' => env('APP_URL_GLOBAL', 'localhost'),
    'central_domain' => env('APP_CENTRAL_DOMAIN', 'localhost'),

    'image_default_logo_company_main' => env('IMAGE_DEFAULT_LOGO_COMPANY_MAIN'),
    'image_default_logo_company_desktop' => env('IMAGE_DEFAULT_LOGO_COMPANY_DESKTOP'),
    'image_default_logo_company_toggle' => env('IMAGE_DEFAULT_LOGO_COMPANY_TOGGLE'),
    'image_default_user_profile_small' => env('IMAGE_DEFAULT_IMAGE_USER_PROFILE_SMALL'),
    'image_default_user_profile_big' => env('IMAGE_DEFAULT_USER_PROFILE_BIG'),
    'image_default_product' => env('IMAGE_DEFAULT_PRODUCT'),
    'image_default_square_200x200' => env('IMAGE_DEFAULT_SUARE_200x200'),

    'guard_name_admin' => env('GUARD_NAME_ADMIN'),
    'guard_name_member' => env('GUARD_NAME_MEMBER'),
    'guard_name_user' => env('GUARD_NAME_USER'),

    'guard_text_admin' => env('GUARD_TEXT_ADMIN'),
    'guard_text_member' => env('GUARD_TEXT_MEMBER'),
    'guard_text_user' => env('GUARD_TEXT_USER'),

    'mail_mailer' => env('MAIL_MAILER'),
    'mail_host' => env('MAIL_HOST'),
    'mail_port' => env('MAIL_PORT'),
    'mail_username' => env('MAIL_USERNAME'),
    'mail_password' => env('MAIL_PASSWORD'),
    'mail_encryption' => env('MAIL_ENCRYPTION'),
    'mail_from_address' => env('MAIL_FROM_ADDRESS'),
    'mail_from_name' => env('MAIL_FROM_NAME'),

];
