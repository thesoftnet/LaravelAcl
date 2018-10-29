<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class UserExistsException
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\TheSoftNetExceptionsInterface;

class UserExistsException extends Exception implements TheSoftNetExceptionsInterface {}