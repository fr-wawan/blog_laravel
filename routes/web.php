<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hermawan Tan",
        "umur" => 15
    ]);
});

Route::get('/posts', function () {
    $data_blog = [
        [
            "title" => "Blog 1",
            "author" => "Hermawan Tan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla maxime iste aut minus esse a non similique repudiandae, ut quisquam ipsam. Illo enim repellat nisi dignissimos, mollitia ducimus atque id asperiores aliquam qui voluptatum natus omnis cumque est sapiente, recusandae maiores. Maxime expedita blanditiis nihil voluptatem, est velit impedit adipisci."
        ],
        [
            "title" => "Blog 2",
            "author" => "Romashon",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla maxime iste aut minus esse a non similique repudiandae, ut quisquam ipsam. Illo enim repellat nisi dignissimos, mollitia ducimus atque id asperiores aliquam qui voluptatum natus omnis cumque est sapiente, recusandae maiores. Maxime expedita blanditiis nihil voluptatem, est velit impedit adipisci."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $data_blog
    ]);
});
