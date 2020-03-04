<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'super admin',
            'email' => 'applocumadmin@yopmail.com',
            'password' => Hash::make('Password@123'),
        ]);


        $this->call(CustomerTableSeeder::class);
    }
}
