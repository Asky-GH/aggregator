<?php

use Illuminate\Database\Seeder;

class LinkTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('link_tag')->insert([
            'link_id' => 1,
            'tag_id' => 2,
        ]);

        DB::table('link_tag')->insert([
            'link_id' => 2,
            'tag_id' => 1,
        ]);
    }
}
