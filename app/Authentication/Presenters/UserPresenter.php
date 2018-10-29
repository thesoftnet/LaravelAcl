<?php  namespace TheSoftNet\LaravelAcl\Authentication\Presenters;
/**
 * Class UserPresenter
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
use TheSoftNet\LaravelAcl\Authentication\Presenters\Traits\PermissionTrait;
use TheSoftNet\LaravelAcl\Library\Presenters\AbstractPresenter;

class UserPresenter extends AbstractPresenter
{
    use PermissionTrait;
} 