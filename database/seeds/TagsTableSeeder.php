<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'content' => 'hot',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'content' => 'funny',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'content' => 'cute',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'content' => 'cool',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'content' => 'famous',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'content' => 'beauty',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
