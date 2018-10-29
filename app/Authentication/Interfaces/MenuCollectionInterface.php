<?php  namespace TheSoftNet\LaravelAcl\Authentication\Interfaces;
/**
 * Interface MenuCollectionInterface
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
interface MenuCollectionInterface
{
    /**
     * Obtain all the menu items
     * @return \TheSoftNet\LaravelAcl\Authentication\Classes\MenuItem
     */
    public function getItemList();

    /**
     * Obtain the menu items that the current user can access
     * @return mixed
     */
    public function getItemListAvailable();

} 