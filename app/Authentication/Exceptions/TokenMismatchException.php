<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class UseTokenMismatchExceptionrExistsException
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class TokenMismatchException extends Exception implements JacopoExceptionsInterface {}