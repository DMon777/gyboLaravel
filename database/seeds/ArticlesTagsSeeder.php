<?php

use Illuminate\Database\Seeder;

class ArticlesTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles_tags")->insert([

            [
                'article_id' => 1,
                'tag_id' => 2
            ],
            [
                'article_id' => 1,
                'tag_id' => 5
            ],
            [
                'article_id' => 2,
                'tag_id' => 1
            ],
            [
                'article_id' => 3,
                'tag_id' => 3
            ],
            [
                'article_id' => 3,
                'tag_id' => 5
            ],
            [
                'article_id' => 4,
                'tag_id' => 4
            ],
            [
                'article_id' => 5,
                'tag_id' => 3
            ],
            [
                'article_id' => 5,
                'tag_id' => 5
            ],
            [
                'article_id' => 6,
                'tag_id' => 3
            ],
            [
                'article_id' => 6,
                'tag_id' => 5
            ],
            [
                'article_id' => 7,
                'tag_id' => 1
            ],



        ]);
    }
}
