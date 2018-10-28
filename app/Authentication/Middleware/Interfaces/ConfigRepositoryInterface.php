<?php
namespace TheSoftNet\LaravelAcl\Authentication\Middleware\Interfaces;

interface ConfigRepositoryInterface {
    public function setOption($key, $value);

    public function getOption($key);
}