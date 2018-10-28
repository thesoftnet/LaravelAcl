<?php  namespace TheSoftNet\LaravelAcl\Authentication\Presenters;
/**
 * Class UserPresenter
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */
use TheSoftNet\LaravelAcl\Authentication\Presenters\Traits\PermissionTrait;
use TheSoftNet\LaravelAcl\Library\Presenters\AbstractPresenter;

class UserPresenter extends AbstractPresenter
{
    use PermissionTrait;
} 