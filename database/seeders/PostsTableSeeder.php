<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary of Post One',
                'body' => 'body of post one',
                'image_path' => '',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary of Post Two',
                'body' => 'body of post Two',
                'image_path' => '',
                'is_published' => false,
                'min_to_read' => 2,
            ]
           ];
    
           foreach($posts as $key => $value) {
            Post::create($value);
           }
    }
}
