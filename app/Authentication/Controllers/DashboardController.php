<?php  namespace TheSoftNet\LaravelAcl\Authentication\Controllers;

use View;

class DashboardController extends Controller{

    public function base()
    {
        return View::make('laravel-acl::admin.dashboard.default');
    }
} 