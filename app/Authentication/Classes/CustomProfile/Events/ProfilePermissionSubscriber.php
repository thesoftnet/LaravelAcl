<?php  namespace TheSoftNet\LaravelAcl\Authentication\Classes\CustomProfile\Events;
use App;
use TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException;

/**
 * Class ProfilePermissionSubscriber
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
class ProfilePermissionSubscriber
{
    protected $permission_error_message = "You don't have the permission to edit custom the user profiles.";

    /**
     * Check if the object is editable
     */
    public function checkProfileTypePermission()
    {
        $auth_helper = App::make('authentication_helper');
        if (! $auth_helper->checkCustomProfileEditPermission() ) throw new PermissionException($this->permission_error_message);
    }

    /**
     * Register the various event to the subscriber
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen('customprofile.creating', 'TheSoftNet\LaravelAcl\Authentication\Classes\CustomProfile\Events\ProfilePermissionSubscriber@checkProfileTypePermission');
        $events->listen('customprofile.deleting', 'TheSoftNet\LaravelAcl\Authentication\Classes\CustomProfile\Events\ProfilePermissionSubscriber@checkProfileTypePermission');
    }

}
