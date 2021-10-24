<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'David DTS',
            'email' => 'davidDTS@gmail',
            'password' => bcrypt(12345)
        ]);

        User::create([
            'name' => 'Danu',
            'email' => 'danu@gmail',
            'password' => bcrypt(12345)
        ]);

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit? Numquam molestiae quod officiis veniam minima exercitationem voluptas hic, tempora nostrum animi odit recusandae distinctio amet suscipit ab iure? Inventore ab quas, ea consequuntur neque unde distinctio labore nesciunt temporibus sapiente sint cum debitis in accusamus porro id minus voluptatum reiciendis dolorem architecto eveniet vitae dignissimos eius? Itaque numquam, aliquam veniam non veritatis consequuntur eligendi doloremque dolorem totam. Recusandae ducimus temporibus, cum, expedita facilis obcaecati odit error, eum eligendi nisi fuga. Tempora, consectetur. Doloremque ipsum deserunt atque minus iure quis, perferendis dicta.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit? Numquam molestiae quod officiis veniam minima exercitationem voluptas hic, tempora nostrum animi odit recusandae distinctio amet suscipit ab iure? Inventore ab quas, ea consequuntur neque unde distinctio labore nesciunt temporibus sapiente sint cum debitis in accusamus porro id minus voluptatum reiciendis dolorem architecto eveniet vitae dignissimos eius? Itaque numquam, aliquam veniam non veritatis consequuntur eligendi doloremque dolorem totam. Recusandae ducimus temporibus, cum, expedita facilis obcaecati odit error, eum eligendi nisi fuga. Tempora, consectetur. Doloremque ipsum deserunt atque minus iure quis, perferendis dicta.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit? Numquam molestiae quod officiis veniam minima exercitationem voluptas hic, tempora nostrum animi odit recusandae distinctio amet suscipit ab iure? Inventore ab quas, ea consequuntur neque unde distinctio labore nesciunt temporibus sapiente sint cum debitis in accusamus porro id minus voluptatum reiciendis dolorem architecto eveniet vitae dignissimos eius? Itaque numquam, aliquam veniam non veritatis consequuntur eligendi doloremque dolorem totam. Recusandae ducimus temporibus, cum, expedita facilis obcaecati odit error, eum eligendi nisi fuga. Tempora, consectetur. Doloremque ipsum deserunt atque minus iure quis, perferendis dicta.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem? Velit eius blanditiis nulla ab dolores doloremque odit? Numquam molestiae quod officiis veniam minima exercitationem voluptas hic, tempora nostrum animi odit recusandae distinctio amet suscipit ab iure? Inventore ab quas, ea consequuntur neque unde distinctio labore nesciunt temporibus sapiente sint cum debitis in accusamus porro id minus voluptatum reiciendis dolorem architecto eveniet vitae dignissimos eius? Itaque numquam, aliquam veniam non veritatis consequuntur eligendi doloremque dolorem totam. Recusandae ducimus temporibus, cum, expedita facilis obcaecati odit error, eum eligendi nisi fuga. Tempora, consectetur. Doloremque ipsum deserunt atque minus iure quis, perferendis dicta.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
