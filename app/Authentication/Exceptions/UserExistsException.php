<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class UserExistsException
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class UserExistsException extends Exception implements JacopoExceptionsInterface {}