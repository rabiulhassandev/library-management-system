<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin\Role;
use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [
            //User Status
            'user_status_management',
            //Role
            'user_role_management',
            //Permission
            'user_permission_management',
            'user_assign_permission',
            //User
            'user_browse',
            'user_show',
            'user_create',
            'user_edit',
            'user_delete',
            // Bteb Result management
            'page_builder',
            // Setting
            'setting_management',
            'report_issue_management',
            // user role edit
            'user_role_edit',
            // Book Request Reply
            'book_request_reply',


            // category
            'category_management',
            // Book Writer
            'book_writer_management',
            // Library Management
            'library_management',
            // Books Management
            'book_management',
            // Profile Management
            'profile_management',
            // Contact Us Management
            'contact_us_management',
            // Books Transition Management
            'book_transition_management',
            // Academic Books Transition Management
            'academic_books_management',
            // Slider Management
            'slider_management',
        ];

        $role = [
            'Developer',
            'Admin',
            'User',
        ];

        $Developer = Role::create(['name' => 'Developer']);
        $Admin = Role::create(['name' => 'Admin']);
        $User = Role::create(['name' => 'User']);

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission])->assignRole($Developer);
        }

        $Admin->givePermissionTo(['user_status_management', 'book_transition_management']);
        $User->givePermissionTo(['slider_management']);



        $users = [
            [
                'name' => 'Developer',
                'email' => 'developer@gmail.com',
                'password' => Hash::make('developer'),
                'email_verified_at' => now(),
                'user_status_id' => 2
            ]
        ];
        foreach ($users as  $user) {
            User::create($user);
        }
        User::first()->assignRole('Developer');
    }
}
