<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class UserNotFoundException
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class LoginRequiredException extends Exception implements JacopoExceptionsInterface {}