<?php  namespace TheSoftNet\LaravelAcl\Authentication\Presenters;
/**
 * Class GroupPresenter
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */
use TheSoftNet\LaravelAcl\Authentication\Presenters\Traits\PermissionTrait;
use TheSoftNet\LaravelAcl\Library\Presenters\AbstractPresenter;

class GroupPresenter extends AbstractPresenter
{
    use PermissionTrait;
} 