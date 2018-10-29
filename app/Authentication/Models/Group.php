<?php  namespace TheSoftNet\LaravelAcl\Authentication\Models;
/**
 * Class Group
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
use Cartalyst\Sentry\Groups\Eloquent\Group as SentryGroup;

class Group extends SentryGroup
{
    protected $guarded = ["id"];

    protected $fillable = ["name", "permissions", "protected"];
} 