<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class ProfileNotFoundException
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class ProfileNotFoundException extends Exception implements JacopoExceptionsInterface {}