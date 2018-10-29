<?php  namespace TheSoftNet\LaravelAcl\Authentication\Interfaces;
/**
 * Interface PermissionProfileHelperInterface
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
interface PermissionProfileHelperInterface 
{
    /**
     * Check if the current user has permission to edit the profile
     * @return boolean
     */
    public function checkProfileEditPermission($user_id);

    /**
     * Obtain the user email that needs to be notificated on registration
     * @return array
     */
    public function getNotificationRegistrationUsersEmail();
}