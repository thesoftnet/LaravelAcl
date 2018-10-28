<?php  namespace TheSoftNet\LaravelAcl\Authentication\Validators;

use TheSoftNet\LaravelAcl\Library\Validators\AbstractValidator;

class UserProfileUserValidator extends AbstractValidator{

    protected static $rules = array(
            "password" => ["confirmed", "min:6"],
    );
} 