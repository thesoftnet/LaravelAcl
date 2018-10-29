<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class PermissionException
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class PermissionException extends Exception implements JacopoExceptionsInterface {}