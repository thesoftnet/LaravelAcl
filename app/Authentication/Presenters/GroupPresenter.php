<?php  namespace TheSoftNet\LaravelAcl\Authentication\Presenters;
/**
 * Class GroupPresenter
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
use TheSoftNet\LaravelAcl\Authentication\Presenters\Traits\PermissionTrait;
use TheSoftNet\LaravelAcl\Library\Presenters\AbstractPresenter;

class GroupPresenter extends AbstractPresenter
{
    use PermissionTrait;
} 