<?php  namespace TheSoftNet\LaravelAcl\Authentication\Tests\Unit\Stubs;
use TheSoftNet\LaravelAcl\Library\Validators\AbstractValidator;

class VoidValidator extends AbstractValidator{
    protected static $rules = [];
}