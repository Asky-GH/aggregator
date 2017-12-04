<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
