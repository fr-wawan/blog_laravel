<?php

namespace App\Models;


class Post
{
    private static $data_blog = [
        [
            "title" => "Blog 1",
            "slug" => "slug-1",
            "author" => "Hermawan Tan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla maxime iste aut minus esse a non similique repudiandae, ut quisquam ipsam. Illo enim repellat nisi dignissimos, mollitia ducimus atque id asperiores aliquam qui voluptatum natus omnis cumque est sapiente, recusandae maiores. Maxime expedita blanditiis nihil voluptatem, est velit impedit adipisci."
        ],
        [
            "title" => "Blog 2",
            "slug" => "slug-2",
            "author" => "Romashon",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla maxime iste aut minus esse a non similique repudiandae, ut quisquam ipsam. Illo enim repellat nisi dignissimos, mollitia ducimus atque id asperiores aliquam qui voluptatum natus omnis cumque est sapiente, recusandae maiores. Maxime expedita blanditiis nihil voluptatem, est velit impedit adipisci."
        ]
    ];


    public static function all()
    {
        return collect(self::$data_blog);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
