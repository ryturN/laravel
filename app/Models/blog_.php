<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs
{
    private static $blog_post = [
        [
            "title" => "Blog Post title",
            "slug" => "blog-post-title",
            "author" => "John",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        ],
        [
            "title" => "Blog Post title 2",
            "slug" => "blog-post-title-2",
            "author" => "John Doe",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        ],
        [
            "title" => "Blog Post title 3",
            "slug" => "blog-post-title-3",
            "author" => "John Doe 2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis quibusdam autem explicabo aut, sequi nesciunt inventore provident voluptate voluptas ipsam recusandae, iste, ipsum perferendis cupiditate non. Perferendis ratione sit natus quidem eius corporis laudantium, eligendi nobis? Ipsam cumque numquam consectetur, perferendis eaque maiores corrupti sapiente quos itaque, tempore modi natus ad rerum, obcaecati deserunt? Aliquid vel doloribus doloremque labore quas? Repellat alias voluptatem voluptas modi dolores deserunt sequi tempora! Tenetur officia nisi consequatur tempora accusamus aliquam pariatur optio accusantium nemo soluta laboriosam quos, illo cupiditate voluptates alias! Delectus nemo dolores impedit sint nihil saepe doloribus distinctio sit dolorum cupiditate?.",
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug){
        $posts = static::all();


        return $posts->firstWhere("slug", $slug);
    }
}

