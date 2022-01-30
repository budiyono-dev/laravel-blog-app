<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        User::factory(10)->create();
        // User::create([
        //     'name' => 'Budiyono',
        //     'email' => 'email@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'yonobudi',
        //     'email' => 'yono@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum unde tenetur enim quisquam sit ab nostrum quibusdam cum, repudiandae modi, sapiente quam fuga ipsam natus eligendi nemo dignissimos eaque iure impedit vitae accusantium. Et mollitia ipsum voluptas sequi ex beatae reiciendis quidem, aut esse animi quod, consequatur dolore doloribus voluptatibus. Cumque animi, ipsum expedita doloribus quibusdam, eos earum voluptates nam nisi, autem exercitationem ab. Quia recusandae eaque esse excepturi accusantium obcaecati, consectetur perspiciatis odio rem itaque.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum unde tenetur enim quisquam sit ab nostrum quibusdam cum, repudiandae modi, sapiente quam fuga ipsam natus eligendi nemo dignissimos eaque iure impedit vitae accusantium. Et mollitia ipsum voluptas sequi ex beatae reiciendis quidem, aut esse animi quod, consequatur dolore doloribus voluptatibus. Cumque animi, ipsum expedita doloribus quibusdam, eos earum voluptates nam nisi, autem exercitationem ab. Quia recusandae eaque esse excepturi accusantium obcaecati, consectetur perspiciatis odio rem itaque.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum unde tenetur enim quisquam sit ab nostrum quibusdam cum, repudiandae modi, sapiente quam fuga ipsam natus eligendi nemo dignissimos eaque iure impedit vitae accusantium. Et mollitia ipsum voluptas sequi ex beatae reiciendis quidem, aut esse animi quod, consequatur dolore doloribus voluptatibus. Cumque animi, ipsum expedita doloribus quibusdam, eos earum voluptates nam nisi, autem exercitationem ab. Quia recusandae eaque esse excepturi accusantium obcaecati, consectetur perspiciatis odio rem itaque.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti tempora earum distinctio rem? Maiores at magnam, magni a facere, illum dolorem cumque minus rem ab corrupti ex ad? Aut, nulla maxime eum unde tenetur enim quisquam sit ab nostrum quibusdam cum, repudiandae modi, sapiente quam fuga ipsam natus eligendi nemo dignissimos eaque iure impedit vitae accusantium. Et mollitia ipsum voluptas sequi ex beatae reiciendis quidem, aut esse animi quod, consequatur dolore doloribus voluptatibus. Cumque animi, ipsum expedita doloribus quibusdam, eos earum voluptates nam nisi, autem exercitationem ab. Quia recusandae eaque esse excepturi accusantium obcaecati, consectetur perspiciatis odio rem itaque.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
