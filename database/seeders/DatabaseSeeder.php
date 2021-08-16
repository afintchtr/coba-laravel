<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
        
        // User::create([
        //     'name' => 'Afin Tachtiar',
        //     'email' => 'afintchtr@gmail.com',
        //     'password' => bcrypt('pass123')
        // ]);
    
        // User::create([
        //     'name' => 'Abdul Hakim',
        //     'email' => 'hakimoo@gmail.com',
        //     'password' => bcrypt('pass124')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'  
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'  
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'  
        ]);
    
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-satu',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem1 ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero. Ad tempora sed unde nostrum dolorum tempore dignissimos vel blanditiis ducimus eligendi explicabo rerum eos alias deleniti, adipisci perferendis maiores architecto assumenda magni quisquam quaerat natus mollitia reprehenderit provident. Ipsam, consequuntur! Veniam natus modi ipsum tenetur, unde harum dicta molestiae numquam ducimus quasi! Sed sint quas eligendi, id, ipsam, quod ea minus explicabo atque laudantium adipisci numquam.</p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero. Ad tempora sed unde nostrum dolorum tempore dignissimos vel blanditiis ducimus eligendi explicabo rerum eos alias deleniti, adipisci perferendis maiores architecto assumenda magni quisquam quaerat natus mollitia reprehenderit provident. Ipsam, consequuntur! Veniam natus modi ipsum tenetur, unde harum dicta molestiae numquam ducimus quasi! Sed sint quas eligendi, id, ipsam, quod ea minus explicabo atque laudantium adipisci numquam.</p>' 
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-dua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem2 ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero. Ad tempora sed unde nostrum dolorum tempore dignissimos vel blanditiis ducimus eligendi explicabo rerum eos alias deleniti, adipisci perferendis maiores architecto assumenda magni quisquam quaerat natus mollitia reprehenderit provident. Ipsam, consequuntur! Veniam natus modi ipsum tenetur, unde harum dicta molestiae numquam ducimus quasi! Sed sint quas eligendi, id, ipsam, quod ea minus explicabo atque laudantium adipisci numquam.</p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero. Ad tempora sed unde nostrum dolorum tempore dignissimos vel blanditiis ducimus eligendi explicabo rerum eos alias deleniti, adipisci perferendis maiores architecto assumenda magni quisquam quaerat natus mollitia reprehenderit provident. Ipsam, consequuntur! Veniam natus modi ipsum tenetur, unde harum dicta molestiae numquam ducimus quasi! Sed sint quas eligendi, id, ipsam, quod ea minus explicabo atque laudantium adipisci numquam.</p>' 
        // ]);
    
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem3 ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero. Ad tempora sed unde nostrum dolorum tempore dignissimos vel blanditiis ducimus eligendi explicabo rerum eos alias deleniti, adipisci perferendis maiores architecto assumenda magni quisquam quaerat natus mollitia reprehenderit provident. Ipsam, consequuntur! Veniam natus modi ipsum tenetur, unde harum dicta molestiae numquam ducimus quasi! Sed sint quas eligendi, id, ipsam, quod ea minus explicabo atque laudantium adipisci numquam.</p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam maxime harum, voluptate qui quibusdam, in molestiae nobis, quas expedita inventore dolorem magnam aliquam! Ex nisi facilis explicabo repudiandae. Assumenda atque cupiditate autem esse sunt, facere placeat nesciunt veniam, iusto ea ab rerum deserunt, beatae quam ut et ipsam ducimus laborum quaerat libero. Ad tempora sed unde nostrum dolorum tempore dignissimos vel blanditiis ducimus eligendi explicabo rerum eos alias deleniti, adipisci perferendis maiores architecto assumenda magni quisquam quaerat natus mollitia reprehenderit provident. Ipsam, consequuntur! Veniam natus modi ipsum tenetur, unde harum dicta molestiae numquam ducimus quasi! Sed sint quas eligendi, id, ipsam, quod ea minus explicabo atque laudantium adipisci numquam.</p>' 
        // ]);
    }
}
