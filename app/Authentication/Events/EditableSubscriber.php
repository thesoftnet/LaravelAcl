<?php  namespace TheSoftNet\LaravelAcl\Authentication\Events;
/**
 * Class EbitableSubscriber
 *
 * @author Anwar thesoftnet4u@gmail.com
 */

use TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException;

class EditableSubscriber
{
    protected $editable_field = "protected";
    /**
     * Check if the object is editable
     */
    public function isEditable($object)
    {
        if($object->{$this->editable_field} == true) throw new PermissionException;
    }

    /**
     * Register the various event to the subscriber
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen('repository.deleting', 'TheSoftNet\LaravelAcl\Authentication\Events\EditableSubscriber@isEditable',10);
        $events->listen('repository.updating', 'TheSoftNet\LaravelAcl\Authentication\Events\EditableSubscriber@isEditable',10);
    }

} 