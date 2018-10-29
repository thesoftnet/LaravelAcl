<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class AuthenticationErrorException
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class AuthenticationErrorException extends Exception implements JacopoExceptionsInterface {}