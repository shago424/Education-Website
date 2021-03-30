<?php 

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Auth;
use DB;

class RoleController extends Controller
{
     public function view(){
     	$roles = Role::all();
     	return view('backend.role.role-view',compact('roles'));
     }

     public function add(){
     	$permissions = Permission::all();
          $permission_groups = User::getpermissiongroup();
     	return view('backend.role.role-add',compact('permissions','permission_groups'));
     }

     public function store(Request $request){
           $this->validate($request,[
            'name'=>'required|unique:roles,name'

            ]);
     	$role =Role::create(['name'=>$request->name]);
     	$permissions = $request->input('permissions');
     	if (!empty($permissions)){
     		$role->syncPermissions($permissions);
     	}
     	return redirect()->route('roles.view')->with('success','Role Added Successfully');
     }


      public function edit($id){

          $role = Role::findByid($id);
          $permissions = Permission::all();
          $permission_groups = User::getpermissiongroup();
          return view('backend.role.role-edit',compact('role','permissions','permission_groups'));
     }

       public function update(Request $request,$id){
          $this->validate($request,[
            'name'=>'required|unique:roles,name,' .$id

            ]);

          $role =Role::findByid($id);
          $permissions = $request->input('permissions');
          if (!empty($permissions)){
               $role->syncPermissions($permissions);
          }
          return redirect()->route('roles.view')->with('success','Role Updated Successfully');
     }

      public function delete($id){

          $role = Role::findByid($id);
          if (!is_null($role)){
               $role->delete();
          }
          return redirect()->route('roles.view')->with('success','Role Deleted Successfully');
     }
}
