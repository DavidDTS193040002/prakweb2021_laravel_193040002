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
        "name" => "David Dalil Tauhid Syabila",
        "email" => "davidDTS@gmail.com",
        "image" => "me.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "David Dalil Tauhid Syabila",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste voluptatem fuga perspiciatis vel! Distinctio sint consectetur, odio neque adipisci consequuntur similique, perferendis aspernatur, molestias veritatis itaque possimus nisi fuga nobis deleniti laudantium assumenda accusantium recusandae sunt quos? Nihil eum impedit nobis ipsum, repellendus autem animi voluptas. Mollitia nobis corporis, minus quos commodi magnam quidem rem earum ratione, delectus fugit vel temporibus libero incidunt doloremque hic fugiat, pariatur deleniti obcaecati doloribus nihil tenetur et est. Quos voluptatibus nisi dolore dolorem nesciunt!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sofyan Egi Lesmana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempore saepe praesentium velit dicta impedit laudantium molestias nostrum quae incidunt aspernatur aliquid eaque, aperiam culpa maiores iusto ad temporibus eius voluptate odio nihil consequuntur perferendis quos. Nisi, earum sapiente. Dolor necessitatibus consectetur, cum perferendis maxime optio assumenda nam repellat aut modi hic possimus voluptates eos architecto ratione incidunt id sit et sunt. Sequi quis, nam tempora, id, dolore quos quaerat dicta ab autem sit assumenda? Accusantium deserunt voluptatum expedita. Cupiditate, expedita accusamus. Possimus ad optio unde quod? Quo ea, omnis repellat expedita nesciunt voluptatum quasi velit animi nam rem nemo."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman sigle post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "David Dalil Tauhid Syabila",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste voluptatem fuga perspiciatis vel! Distinctio sint consectetur, odio neque adipisci consequuntur similique, perferendis aspernatur, molestias veritatis itaque possimus nisi fuga nobis deleniti laudantium assumenda accusantium recusandae sunt quos? Nihil eum impedit nobis ipsum, repellendus autem animi voluptas. Mollitia nobis corporis, minus quos commodi magnam quidem rem earum ratione, delectus fugit vel temporibus libero incidunt doloremque hic fugiat, pariatur deleniti obcaecati doloribus nihil tenetur et est. Quos voluptatibus nisi dolore dolorem nesciunt!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sofyan Egi Lesmana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempore saepe praesentium velit dicta impedit laudantium molestias nostrum quae incidunt aspernatur aliquid eaque, aperiam culpa maiores iusto ad temporibus eius voluptate odio nihil consequuntur perferendis quos. Nisi, earum sapiente. Dolor necessitatibus consectetur, cum perferendis maxime optio assumenda nam repellat aut modi hic possimus voluptates eos architecto ratione incidunt id sit et sunt. Sequi quis, nam tempora, id, dolore quos quaerat dicta ab autem sit assumenda? Accusantium deserunt voluptatum expedita. Cupiditate, expedita accusamus. Possimus ad optio unde quod? Quo ea, omnis repellat expedita nesciunt voluptatum quasi velit animi nam rem nemo."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
