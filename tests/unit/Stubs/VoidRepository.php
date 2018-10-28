<?php  namespace TheSoftNet\LaravelAcl\Authentication\Tests\Unit\Stubs;

use TheSoftNet\LaravelAcl\Library\Repository\EloquentBaseRepository;

class VoidRepository extends EloquentBaseRepository{
    public function __construct(){}
    public function create(array $data){}
    public function update($id, array $data){}
    public function delete($id){}
    public function find($id){}
    public function all(){}
} 