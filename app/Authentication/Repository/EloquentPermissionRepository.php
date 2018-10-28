<?php namespace TheSoftNet\LaravelAcl\Authentication\Repository;
/**
 * Class EloquentPermissionRepository
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */
use TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException;
use TheSoftNet\LaravelAcl\Authentication\Models\Permission;
use TheSoftNet\LaravelAcl\Library\Repository\EloquentBaseRepository;
use Event, App;

class EloquentPermissionRepository extends EloquentBaseRepository
{
    protected $group_repo;
    protected $user_repo;

    public function __construct()
    {
        $this->group_repo = App::make('group_repository');
        $this->user_repo = App::make('user_repository');

        Event::listen(['repository.deleting','repository.updating'], '\TheSoftNet\LaravelAcl\Authentication\Repository\EloquentPermissionRepository@checkIsNotAssociatedToAnyUser');
        Event::listen(['repository.deleting','repository.updating'], '\TheSoftNet\LaravelAcl\Authentication\Repository\EloquentPermissionRepository@checkIsNotAssociatedToAnyGroup');

        return parent::__construct(new Permission);
    }

    /**
     * @param $obj
     * @throws \TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException
     */
    public function checkIsNotAssociatedToAnyGroup($permission_obj)
    {
        $all_groups = $this->group_repo->all();
        $this->validateIfPermissionIsInCollection($permission_obj, $all_groups);
    }

    /**
     * @param $permission_obj
     * @throws \TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException
     */
    public function checkIsNotAssociatedToAnyUser($permission_obj)
    {
        $all_users = $this->user_repo->all();
        $this->validateIfPermissionIsInCollection($permission_obj, $all_users);
    }

    /**
     * @param $permission
     * @param $collection
     * @throws \TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException
     */
    private function validateIfPermissionIsInCollection($permission, $collection)
    {
        foreach ($collection as $collection_item)
        {
            $perm = $this->permissionsToArray($collection_item->permissions);
            if (! empty($perm) && is_array($perm) && array_key_exists($permission->permission, $perm)) throw new PermissionException;
        }
    }

    private function permissionsToArray($permissions)
    {
        if ( ! $permissions)
        {
            return array();
        }

        if (is_array($permissions))
        {
            return $permissions;
        }

        if ( ! $_permissions = json_decode($permissions, true))
        {
            throw new \InvalidArgumentException("Cannot JSON decode permissions [$permissions].");
        }

        return $_permissions;
    }
}