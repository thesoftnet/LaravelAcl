<?php  namespace TheSoftNet\LaravelAcl\Authentication\Controllers;
/**
 * Class PermissionController
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
use Illuminate\Http\Request;
use TheSoftNet\LaravelAcl\Library\Form\FormModel;
use TheSoftNet\LaravelAcl\Authentication\Models\Permission;
use TheSoftNet\LaravelAcl\Authentication\Validators\PermissionValidator;
use TheSoftNet\LaravelAcl\Library\Exceptions\TheSoftNetExceptionsInterface;
use View, Redirect, App, Config;

class PermissionController extends Controller
{
    /**
     * @var \TheSoftNet\LaravelAcl\Authentication\Repository\PermissionGroupRepository
     */
    protected $r;
    /**
     * @var \TheSoftNet\LaravelAcl\Authentication\Validators\PermissionValidator
     */
    protected $v;

    public function __construct(PermissionValidator $v)
    {
        $this->r = App::make('permission_repository');
        $this->v = $v;
        $this->f = new FormModel($this->v, $this->r);
    }

    public function getList()
    {
        $objs = $this->r->all();

        return View::make('laravel-acl::admin.permission.list')->with(["permissions" => $objs]);
    }

    public function editPermission(Request $request)
    {
        try
        {
            $obj = $this->r->find($request->get('id'));
        }
        catch(TheSoftNetExceptionsInterface $e)
        {
            $obj = new Permission;
        }

        return View::make('laravel-acl::admin.permission.edit')->with(["permission" => $obj]);
    }

    public function postEditPermission(Request $request)
    {
        $id = $request->get('id');

        try
        {
            $obj = $this->f->process($request->all());
        }
        catch(TheSoftNetExceptionsInterface $e)
        {
            $errors = $this->f->getErrors();
            // passing the id incase fails editing an already existing item
            return Redirect::route("permission.edit", $id ? ["id" => $id]: [])->withInput()->withErrors($errors);
        }

        return Redirect::route("permission.edit",["id" => $obj->id])->withMessage(Config::get('acl_messages.flash.success.permission_permission_edit_success'));
    }

    public function deletePermission(Request $request)
    {
        try
        {
            $this->f->delete($request->all());
        }
        catch(TheSoftNetExceptionsInterface $e)
        {
            $errors = $this->f->getErrors();
            return Redirect::route('permission.list')->withErrors($errors);
        }
        return Redirect::route('permission.list')->withMessage(Config::get('acl_messages.flash.success.permission_permission_delete_success'));
    }
} 