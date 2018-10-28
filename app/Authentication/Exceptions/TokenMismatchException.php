<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class UseTokenMismatchExceptionrExistsException
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class TokenMismatchException extends Exception implements JacopoExceptionsInterface {}