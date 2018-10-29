<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class UserNotFoundException
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\TheSoftNetExceptionsInterface;

class LoginRequiredException extends Exception implements TheSoftNetExceptionsInterface {}