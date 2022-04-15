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



            // category
            'category_management',
            // Book Writer
            'book_writer_management',
            // Library Management
            'library_management',
            // Book Management
            'book_management',
            // Profile Management
            'profile_management',
            // Contact Us Management
            'contact_us_management',
            // Book Transition Management
            'book_transition_management',
        ];

        $role = [
            'Administrator',
            'Manager',
            'Team Member',
            'Contributor',
            'Author',
        ];

        $Administrator = Role::create(['name' => 'Administrator']);
        $Manager = Role::create(['name' => 'Manager']);
        $Team_Member = Role::create(['name' => 'Team Member']);
        $Contributor = Role::create(['name' => 'Contributor']);
        $Developer = Role::create(['name' => 'Developer']);

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission])->assignRole($Developer);
        }

        $Manager->givePermissionTo([]);
        $Team_Member->givePermissionTo([]);
        $Contributor->givePermissionTo([]);
        $Administrator->givePermissionTo([]);



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
