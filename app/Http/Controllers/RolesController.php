<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\PermissionRole;
use App\Permission;
use DB;

class RolesController extends Controller
{
    //
    protected function getRoleWithUsers(){
        $get_all_users_with_roles =User::join('roles','users.role_id','roles.id')
        ->where('users.status','active')
        ->select('users.name','users.email','roles.role','users.id')
        ->get();
        return view('Admin.all_users', compact('get_all_users_with_roles'));
    }
    protected function getRole(){
        $get_all_roles=Role::get();
        if(in_array('Can view account settings', auth()->user()->getUserPermisions())){
        return view('Admin.role', compact('get_all_roles'));
    }else{
        abort('404');
    }
    }
    protected function addRoleForm(){
        if(in_array('Can view account settings', auth()->user()->getUserPermisions())){
        return view('Admin.role-form');
        }else{
            abort('404');
        }
    }
    protected function createRole(){
    $role =new Role;
    $role->role =request()->role;
    $role->save();
    return redirect()->back()->with('msg','You have Successfully Created Role');
    }
    protected function getUserAndRoles($id){
        $get_selected_role = Role::where()->paginate('10');
        $display_user=User::join('roles','users.role_id','roles.id')
        ->where('users.id',$id)
        ->select('users.name','users.email','roles.role','users.id')->paginate('10');
        $get_my_role = User::join('roles','users.role_id','roles.id')
        ->where('users.id',$id)->select('roles.role')->value('role');
        return view('Admin.permission_role', compact('display_user','get_selected_role','get_my_role'));
    }
    protected function getPermissionRole($id){
        $get_selected_role = User::join('roles','users.role_id','roles.id')->where('users.id',$id)->get();
        $get_all_permissions = PermissionRole::join('roles','permission_roles.role_id','roles.id')
        ->join('permissions','permission_roles.permission_id','permissions.id','permissions.id')
        ->where('roles.id',$id)
        ->get();
        return view('Admin.user_role', compact('get_all_permissions','get_selected_role'));
    }

    protected function getAccountRoles($id){
        $get_user=User::join('roles','users.role_id','roles.id')
        ->where('users.id',$id)->get();
        $display_roles=Role::paginate('10');
        $get_my_role = User::join('roles','users.role_id','roles.id')
        ->where('users.id',$id)->select('roles.role')->value('role');
        return view('Admin.account_setting_roles', compact('display_roles','get_user','get_my_role'));
    }
    protected function getPermissionInCheckboxes(){
        $display_all_permissions =Permission::get();
        return view('Admin.permissions', compact('display_all_permissions'));
    }
    protected function assignPermission($id, Request $request){
        if(empty($request->user_permisions)){
            return redirect()->back()->withErrors("No updates were made, you didn't select any permision");
        }
        $permissions = $request->user_permisions;
            foreach($permissions as $permission){
                if(PermissionRole::where('role_id',$id)->where('permission_id',$permission)->exists()){
                    continue;
                }
                else{
                    PermissionRole::create(array(
                        'role_id' => $id,
                        'permission_id' => $permission
                    ));
                }
            }
        return Redirect()->back()->with('msg',"Permission(s) added Successfully");
    }
    protected function unsignPermission($id){
        permissionrole::where('permission_id',$id)->delete();
        return redirect()->back()->with('msg','Permission has been unsigned successfully');
    }

    protected function updateRole($id, Request $request){
        User::where('id',$id)->update(array(
            'role_id'=>$request->user_role
        ));
        return redirect('/get-account-settings')->with('msg','You have updated user Role successfully');
        
    }
}
