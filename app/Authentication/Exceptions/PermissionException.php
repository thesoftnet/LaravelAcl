<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class PermissionException
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class PermissionException extends Exception implements JacopoExceptionsInterface {}