<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Link::class, 2)->create([
            'user_id' => 1,
            'status_id' => 2,
        ]);

        factory(App\Link::class, 2)->create([
            'user_id' => 2,
            'status_id' => 1,
        ]);
    }
}
