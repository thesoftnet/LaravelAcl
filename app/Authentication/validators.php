<?php
// mail validator
Validator::extend('mail_signup', 'TheSoftNet\LaravelAcl\Authentication\Validators\UserSignupEmailValidator@validateEmailUnique');
// captcha validator
use TheSoftNet\LaravelAcl\Authentication\Classes\Captcha\GregWarCaptchaValidator;
$captcha_validator = App::make('captcha_validator');
Validator::extend('captcha', 'TheSoftNet\LaravelAcl\Authentication\Classes\Captcha\GregWarCaptchaValidator@validateCaptcha', $captcha_validator->getErrorMessage() );