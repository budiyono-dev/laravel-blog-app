<?php

namespace App\Models;


class Post{
    private static $blogPost = [
        [
            "title" => "judul blog",
            "slug" => "judul-post-pertama",
            "author" => "Budiyono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ad minus corporis ipsa, est, esse vitae magni totam tempore harum a molestias explicabo. Praesentium quia officia ipsa aliquid dolorum error, voluptatum minima veritatis, quam corrupti animi expedita asperiores fugit, aliquam consectetur sequi ab iste labore repellat accusantium! Ratione id excepturi porro laboriosam error quasi iste voluptates? Provident vero, temporibus molestias laborum sapiente suscipit corrupti assumenda itaque deleniti repellat eaque quo nesciunt sit tempora repellendus? Perferendis dolorem ut magnam tempora autem?"
        ], [
            "title" => "judul blog 2",
            "slug" => "judul-post-kedua",
            "author" => "Budiyono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ad minus corporis ipsa, est, esse vitae magni totam tempore harum a molestias explicabo. Praesentium quia officia ipsa aliquid dolorum error, voluptatum minima veritatis, quam corrupti animi expedita asperiores fugit, aliquam consectetur sequi ab iste labore repellat accusantium! Ratione id excepturi porro laboriosam error quasi iste voluptates? Provident vero, temporibus molestias laborum sapiente suscipit corrupti assumenda itaque deleniti repellat eaque quo nesciunt sit tempora repellendus? Perferendis dolorem ut magnam tempora autem?"
        ]
    ];

    public static function all(){
        return collect(self::$blogPost);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}