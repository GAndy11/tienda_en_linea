<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions list
        Permission::create(['name' => 'admin']);

        //Admin
        $admin = Role::create(['name' => 'admin']);

        //Assign permission to admin role
        $admin->givePermissionTo('admin');

        $user = User::find(1); //Admin for default
        $user->assignRole('admin');

    }
}
