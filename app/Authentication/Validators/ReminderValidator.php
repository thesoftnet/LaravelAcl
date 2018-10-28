<?php namespace TheSoftNet\LaravelAcl\Authentication\Validators;

use TheSoftNet\LaravelAcl\Library\Validators\AbstractValidator;

class ReminderValidator extends AbstractValidator
{
    protected static $rules = array(
        "password" => ["required", "min:6"],
    );
}