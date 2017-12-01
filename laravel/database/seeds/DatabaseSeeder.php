<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

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

        DB::table('statuses')->insert([
            'approved' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('statuses')->insert([
            'approved' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('links')->insert([
            'title' => 'Udacity',
            'url' => 'https://www.udacity.com/',
            'description' => 'One of the best MOOC providers with the latest in Deep Learning, Machine Learning, Web Development and more',
            'user_id' => 1,
            'status_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('links')->insert([
            'title' => 'GeekBrains',
            'url' => 'https://geekbrains.ru/',
            'description' => 'Образовательный портал, который помогает начать карьеру в IT с нуля или получить новые навыки для её развития',
            'user_id' => 2,
            'status_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 2,
            'link_id' => 1,
            'body' => 'Great link! Thank you!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'name' => 'RU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'ENG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'GENERAL',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'FREE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'PAID',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'PHP',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'HTML',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('link_tag')->insert([
            'link_id' => 1,
            'tag_id' => 2,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 1,
            'tag_id' => 3,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 1,
            'tag_id' => 4,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 1,
            'tag_id' => 5,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 1,
            'tag_id' => 7,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 2,
            'tag_id' => 1,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 2,
            'tag_id' => 3,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 2,
            'tag_id' => 4,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 2,
            'tag_id' => 5,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 2,
            'tag_id' => 6,
        ]);
        DB::table('link_tag')->insert([
            'link_id' => 2,
            'tag_id' => 7,
        ]);
    }
}


