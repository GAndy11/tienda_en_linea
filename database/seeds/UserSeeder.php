<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create an admin user for platform
        /*
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'alexanderecheverry11@gmail.com',
            'password' => Hash::make('123'),
        ]);
        */

        $user = new User();

        $user->name = "Admin";
        $user->email = "alexanderecheverry11@gmail.com";
        $user->password = Hash::make('123');

        $user->save();
    }
}
