<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'askhat',
            'email' => 'asky.gm@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'murat',
            'email' => 'hmurich@mail.ru',
            'password' => bcrypt('user'),
        ]);

        DB::table('statuses')->insert([
            'approved' => false,
        ]);
        DB::table('statuses')->insert([
            'approved' => true,
        ]);

        DB::table('links')->insert([
            'title' => 'Udacity',
            'url' => 'https://www.udacity.com/',
            'description' => 'One of the best MOOC providers with the latest in Deep Learning, Machine Learning, Web Development and more',
            'user_id' => 1,
            'status_id' => 2,
        ]);
        DB::table('links')->insert([
            'title' => 'GeekBrains',
            'url' => 'https://geekbrains.ru/',
            'description' => 'Образовательный портал, который помогает начать карьеру в IT с нуля или получить новые навыки для её развития',
            'user_id' => 2,
            'status_id' => 1,
        ]);

        DB::table('tags')->insert([
            'name' => 'RU',
        ]);
        DB::table('tags')->insert([
            'name' => 'ENG',
        ]);
        DB::table('tags')->insert([
            'name' => 'GENERAL',
        ]);
        DB::table('tags')->insert([
            'name' => 'FREE',
        ]);
        DB::table('tags')->insert([
            'name' => 'PAID',
        ]);
        DB::table('tags')->insert([
            'name' => 'PHP',
        ]);
        DB::table('tags')->insert([
            'name' => 'HTML',
        ]);

        DB::table('link_tags')->insert([
            'link_id' => 1,
            'tag_id' => 2,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 1,
            'tag_id' => 3,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 1,
            'tag_id' => 4,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 1,
            'tag_id' => 5,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 1,
            'tag_id' => 7,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 2,
            'tag_id' => 1,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 2,
            'tag_id' => 3,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 2,
            'tag_id' => 4,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 2,
            'tag_id' => 5,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 2,
            'tag_id' => 6,
        ]);
        DB::table('link_tags')->insert([
            'link_id' => 2,
            'tag_id' => 7,
        ]);
    }
}
