<?php namespace TheSoftNet\LaravelAcl\Authentication\Exceptions;
/**
 * Class ProfileNotFoundException
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use Exception;
use TheSoftNet\LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

class ProfileNotFoundException extends Exception implements JacopoExceptionsInterface {}