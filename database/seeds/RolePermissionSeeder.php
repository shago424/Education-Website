<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create roll

        $rolesuperadmin = Role::create(['name' => 'superadmin']);
        $roleadmin = Role::create(['name' => 'admin']);
        $roleuser = Role::create(['name' => 'user']);
        $roleeditor = Role::create(['name' => 'editor']);
        $roleopertor = Role::create(['name' => 'operotor']);

        //permission list Arrey

        $permissions = [
                            //dashboard Permisssion
                [
                        'group_name' =>'dashboard',
                        'permissions' => [
                            'dashboard.view',
                            'dashboard.edit',
                        ]
                ],
                            //frontend Permisssion
                   [
                        'group_name' =>'frontend',
                        'permissions' => [
                           'frontend.create',
                           'frontend.view',
                           'frontend.edit',
                            'frontend.delete',
                            'frontend.approve',
                        ]
                  ],
                   
                        //Admin Permisssion
                   [
                        'group_name' =>'admin',
                        'permissions' => [
                           'admin.create',
                           'admin.view',
                           'admin.edit',
                            'admin.delete',
                            'admin.approve',
                        ]
                  ],

                        //Role Permisssion
                   [
                        'group_name' =>'role',
                        'permissions' => [
                           'role.create',
                           'role.view',
                           'role.edit',
                            'role.delete',
                            'role.approve',
                        ]
                  ],
        	
                        //User Permisssion
                   [
                        'group_name' =>'user',
                        'permissions' => [
                           'user.create',
                           'user.view',
                           'user.edit',
                            'user.delete',
                            'user.approve',
                        ]
                  ],
                        //Profile Permisssion
                   [
                        'group_name' =>'profile',
                        'permissions' => [
                            
                            'profile.view',
                            'profile.edit',
                        ]
                  ],
        ];

        // create And Assign Permission

    for ( $i = 0; $i <count($permissions); $i++){
    $permissiongroup = $permissions[$i]['group_name'];
    for ( $j = 0; $j <count($permissions[$i]['permissions']); $j++){
    $permission= Permission::create(['name' =>$permissions[$i]['permissions'][$j],'group_name' =>$permissiongroup]);
    $rolesuperadmin->givePermissionTo($permission);
    $permission->assignRole($rolesuperadmin);

            }
        		
        }

    }
}
