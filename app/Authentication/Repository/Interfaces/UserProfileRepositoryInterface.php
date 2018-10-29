<?php  namespace TheSoftNet\LaravelAcl\Authentication\Repository\Interfaces;
/**
 * Interface UserProfileRepositoryInterface
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
interface UserProfileRepositoryInterface
{
    /**
     * Obtains the profile from the user_id
     * @param $user_id
     * @return mixed
     */
    public function getFromUserId($user_id);
}