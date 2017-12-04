<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comment::class, 2)->create([
            'user_id' => 2,
            'link_id' => 1,
        ]);

        factory(App\Comment::class)->create([
            'user_id' => 1,
            'link_id' => 1,
        ]);
    }
}
