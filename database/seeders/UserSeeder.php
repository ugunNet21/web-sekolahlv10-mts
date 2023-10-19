<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    $faker = Faker::create();
    // Buat data Admin
    $admin = new User();
    $admin->name = "Admin";
    $admin->username = "admin";
    $admin->password = bcrypt("password");
    $admin->role = "admin";
    $admin->avatar = "images/admin.png";
    $admin->save();
    }
}



 // DB::table('users')->insert([
        //     [
        //         'name' => 'Operator',
        //         'email' => 'operator@example.com',
        //         'password' => bcrypt('password'),
        //     ],
        //     [
        //         'name' => 'Admin1',
        //         'email' => 'admin1@example.com',
        //         'password' => bcrypt('password'),
        //     ],
        // ]);
