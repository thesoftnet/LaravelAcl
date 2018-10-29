<?php  namespace TheSoftNet\LaravelAcl\Authentication\Validators;

use TheSoftNet\LaravelAcl\Library\Validators\AbstractValidator;

/**
 * Class UserProfileAvatarValidator
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
class UserProfileAvatarValidator extends AbstractValidator
{
    protected static $rules = [
        "avatar" => ['image','required', 'max:4000']
    ];
} 