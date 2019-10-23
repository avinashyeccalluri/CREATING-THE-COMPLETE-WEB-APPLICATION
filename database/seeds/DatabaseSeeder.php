<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class,20)->create();
        factory(Admin::class,10)->create();
    }
}
