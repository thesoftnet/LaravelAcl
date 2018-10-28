<?php namespace TheSoftNet\LaravelAcl\Authentication\Validators;

use Event;
use TheSoftNet\LaravelAcl\Library\Validators\AbstractValidator;

class GroupValidator  extends AbstractValidator
{
    protected static $rules = array(
        "name" => ["required"],
    );

    public function __construct()
    {
        Event::listen('validating', function($input)
        {
            static::$rules["name"][] = "unique:groups,name,{$input['id']}";
        });
    }
} 