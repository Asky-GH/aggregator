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
        $this->call(UsersTableSeeder::class);

        $this->call(StatusesTableSeeder::class);

        $this->call(LinksTableSeeder::class);

        $this->call(CommentsTableSeeder::class);

        $this->call(TagsTableSeeder::class);
        
        $this->call(LinkTagsTableSeeder::class);
    }
}


