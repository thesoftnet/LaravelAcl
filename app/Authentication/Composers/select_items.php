<?php
use TheSoftNet\LaravelAcl\Authentication\Helpers\FormHelper;
/**
 * permission select
 */
View::composer(['laravel-acl::admin.user.edit', 'laravel-acl::admin.group.edit'], function ($view)
{
    $fh = new FormHelper();
    $values_permission = $fh->getSelectValuesPermission();
    $view->with('permission_values', $values_permission);
});
/**
 * group select
 */
View::composer(['laravel-acl::admin.user.edit', 'laravel-acl::admin.group.edit',
                'laravel-acl::admin.user.search'], function ($view)
{
    $fh = new FormHelper();
    $values_group = $fh->getSelectValuesGroups();
    $view->with('group_values', $values_group);
});