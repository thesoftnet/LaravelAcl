<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class AuthenticationErrorException
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\TheSoftNetExceptionsInterface;

class AuthenticationErrorException extends Exception implements TheSoftNetExceptionsInterface {}