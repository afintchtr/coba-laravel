<?php

namespace App\Models;

class Post
{
    private static  $blog_posts = [
    [
        "title" => "Mari Belajar Laravel bagian 1",
        "slug" => "judul-1",
        "author" => "Afin Tachtiar",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut necessitatibus, deleniti obcaecati rerum dolor hic dolores  eveniet nisi similique est iure sapiente laudantium nesciunt eos sed dolorum distinctio qui cumque debitis expedita explicabo aspernatur minus sequi. Eius sequi sed non, eligendi assumenda dolorum. Quis velit porro aut voluptatum, itaque assumenda ad corrupti id rerum saepe esse necessitatibus in, officiis nulla, cupiditate dolorum sed natus similique enim molestiae fuga architecto ipsa blanditiis! Quo est velit officia, libero numquam nobis vero?",
        
        ],
    [
        "title" => "Mari Belajar Laravel bagian 2",
        "slug" => "judul-2",
        "author" => "Jesse Tachtiar",
        "body" => "Zeebah Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut necessitatibus, deleniti obcaecati rerum dolor hic dolores eveniet nisi similique est iure sapiente laudantium nesciunt eos sed dolorum distinctio qui cumque debitis expedita explicabo aspernatur minus sequi. Eius sequi sed non, eligendi assumenda dolorum. Quis velit porro aut voluptatum, itaque assumenda ad corrupti id rerum saepe esse necessitatibus in, officiis nulla, cupiditate dolorum sed natus similique enim molestiae fuga architecto ipsa blanditiis! Quo est velit officia, libero numquam nobis vero?",
           
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
