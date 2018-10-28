<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class AuthenticationErrorException
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class AuthenticationErrorException extends Exception implements JacopoExceptionsInterface {}