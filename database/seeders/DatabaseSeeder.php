<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Post::factory(20)->create();

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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque?',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque? Iusto quam nisi perspiciatis eaque, esse sit itaque praesentium deleniti debitis quas architecto minima quidem minus quo fugit ea, excepturi quod repudiandae cumque adipisci veniam ut et. Beatae, vel nisi ducimus fuga saepe facere quaerat sequi aut totam autem dolorum sed cupiditate repudiandae consectetur dicta veniam </p><p>optio quis iure hic, at id quod! Expedita totam molestiae similique alias dolores praesentium commodi tenetur aliquam atque. Ea corporis quibusdam libero non perferendis id earum cumque dignissimos, minus sint deserunt molestiae nulla suscipit tempora quam. Sapiente consectetur quia perspiciatis necessitatibus atque reprehenderit tempore? Neque porro quae numquam corporis sit non</p><p>reiciendis iure blanditiis suscipit ipsum tempore odio omnis voluptatum magnam labore, maxime veniam distinctio? Ex incidunt corrupti aperiam, et non assumenda quisquam dolores itaque tempora, dolor temporibus debitis culpa nesciunt quam, laudantium iusto optio neque?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

         User::create([
            'name' => 'Istina',
            'username' => 'istina',
            'email' => 'istina@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Werner',
        //     'email' => 'werner@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque?',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque? Iusto quam nisi perspiciatis eaque, esse sit itaque praesentium deleniti debitis quas architecto minima quidem minus quo fugit ea, excepturi quod repudiandae cumque adipisci veniam ut et. Beatae, vel nisi ducimus fuga saepe facere quaerat sequi aut totam autem dolorum sed cupiditate repudiandae consectetur dicta veniam </p><p>optio quis iure hic, at id quod! Expedita totam molestiae similique alias dolores praesentium commodi tenetur aliquam atque. Ea corporis quibusdam libero non perferendis id earum cumque dignissimos, minus sint deserunt molestiae nulla suscipit tempora quam. Sapiente consectetur quia perspiciatis necessitatibus atque reprehenderit tempore? Neque porro quae numquam corporis sit non</p><p>reiciendis iure blanditiis suscipit ipsum tempore odio omnis voluptatum magnam labore, maxime veniam distinctio? Ex incidunt corrupti aperiam, et non assumenda quisquam dolores itaque tempora, dolor temporibus debitis culpa nesciunt quam, laudantium iusto optio neque?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque?',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque? Iusto quam nisi perspiciatis eaque, esse sit itaque praesentium deleniti debitis quas architecto minima quidem minus quo fugit ea, excepturi quod repudiandae cumque adipisci veniam ut et. Beatae, vel nisi ducimus fuga saepe facere quaerat sequi aut totam autem dolorum sed cupiditate repudiandae consectetur dicta veniam </p><p>optio quis iure hic, at id quod! Expedita totam molestiae similique alias dolores praesentium commodi tenetur aliquam atque. Ea corporis quibusdam libero non perferendis id earum cumque dignissimos, minus sint deserunt molestiae nulla suscipit tempora quam. Sapiente consectetur quia perspiciatis necessitatibus atque reprehenderit tempore? Neque porro quae numquam corporis sit non</p><p>reiciendis iure blanditiis suscipit ipsum tempore odio omnis voluptatum magnam labore, maxime veniam distinctio? Ex incidunt corrupti aperiam, et non assumenda quisquam dolores itaque tempora, dolor temporibus debitis culpa nesciunt quam, laudantium iusto optio neque?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque?',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat numquam neque voluptatibus. Sint voluptatibus labore dolorum neque? Iusto quam nisi perspiciatis eaque, esse sit itaque praesentium deleniti debitis quas architecto minima quidem minus quo fugit ea, excepturi quod repudiandae cumque adipisci veniam ut et. Beatae, vel nisi ducimus fuga saepe facere quaerat sequi aut totam autem dolorum sed cupiditate repudiandae consectetur dicta veniam </p><p>optio quis iure hic, at id quod! Expedita totam molestiae similique alias dolores praesentium commodi tenetur aliquam atque. Ea corporis quibusdam libero non perferendis id earum cumque dignissimos, minus sint deserunt molestiae nulla suscipit tempora quam. Sapiente consectetur quia perspiciatis necessitatibus atque reprehenderit tempore? Neque porro quae numquam corporis sit non</p><p>reiciendis iure blanditiis suscipit ipsum tempore odio omnis voluptatum magnam labore, maxime veniam distinctio? Ex incidunt corrupti aperiam, et non assumenda quisquam dolores itaque tempora, dolor temporibus debitis culpa nesciunt quam, laudantium iusto optio neque?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
