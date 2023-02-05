<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::orderByDesc('id')->paginate(10);
        
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user){
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user){
        if($user->hasRole($request->role)){
            return back()->with('message', 'Role Exists.');
        }
        $user->assignRole($request->role);
        return back()->with('message', 'Role Assigned Successfully.');
    }

    public function removeRole(User $user, Role $role){
        if($user->hasRole($role)){
            $user->removeRole($role);
            return back()->with('message', 'Role Removed Successfully .');
        }
        return back()->with('message', 'Role not Exists.');
    }

    public function givePermission(Request $request, User $user){
        if($user->hasPermissionTo($request->permission)){
            return back()->with('message', 'Permission Exists.');
        }
        $user->givePermissionto($request->permission);
        return back()->with('message', 'Permission Added Successfully.');
    }

    public function revokePermission(User $user, Permission $permission){
        if($user->hasPermissionTo($permission)){
            $user->revokePermissionto($permission);
            return back()->with('message', 'Permission Revoked Successfully .');
        }
        return back()->with('message', 'Permission not Exists.');

    }

    public function distroy(User $user){
        if($user->hasRole('admin')){
            return back()->with('message', 'You are admin.');
        }
        $user->delete();

        return back()->with('message', 'User Deleted');
    }

    public function ChangePassword(User $user){

       $data['user_data']=$user;
       //dd($data['user_data']);
        return view('admin.users.change-password',$data);
    }

    public function UpdateChangePassword(Request $request, User $user){

        //dd($user->id);

            $user = User::find($user->id);
            $user->password = Hash::make($request->password);
            $user->save();

           $notification=[
            'message'=>'Successfully update Password',
            'alert-type'=>'success'
           
           ]; 

           return redirect()->back()->with($notification);
    }
}
