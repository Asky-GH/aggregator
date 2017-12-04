<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'askhat',
            'email' => 'asky.gm@gmail.com',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => str_random(10),
        ]);
        
        DB::table('users')->insert([
            'name' => 'murat',
            'email' => 'hmurich@mail.ru',
            'password' => bcrypt('user'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => str_random(10),
        ]);
    }
}
