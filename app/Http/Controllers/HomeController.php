<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'shop-manager']);
        // Role::create(['name'=>'Admin']);
        //Permission::create(['name'=>'add_product']);
        //$permission = Permission::create(['name'=>'view_product']);
        //$role = Role::findById(1);
        //$permission = Permission::findById(1);
        // $role->givePermissionTo($permission);
        //$permission->removeRole($role);
        //$role->revokePermission($permission);
        return view('home');
    }
}
