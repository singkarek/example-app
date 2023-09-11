<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::create([
            'name' => 'Fierda Stephen',
            'username' => 'fireflies14',
            'email' => 'fierdastephen14@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Gaghana',
        //     'email' => 'gaghana@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        Category::create([
            'name' => 'Web Programmer',
            'slug' => 'web-programmer'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);
        
        Post::factory(10)->create();

        // Post::create([
        //     'judul' => 'First Title',
        //     'slug' => 'first-title',
        //     'category_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Vel iure corrupti voluptas',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel iure corrupti voluptas, id dignissimos eligendi magnam dolorem incidunt similique explicabo quas blanditiis tenetur temporibus obcaecati in unde? Doloribus atque minus reprehenderit natus? Est corrupti modi, reprehenderit aperiam suscipit qui alias ex esse nesciunt quasi sapiente libero fugiat quo quae praesentium facilis iure sit tenetur architecto ab adipisci. Culpa qui modi accusantium possimus ducimus pariatur amet quam provident harum hic rem maxime placeat illo repellat, ab mollitia a eligendi sunt tenetur consequuntur adipisci!</p><p>Repellat maiores ullam atque aliquam libero, rem dignissimos exercitationem animi accusamus sapiente sequi incidunt pariatur quam veniam optio explicabo culpa dicta quisquam odio aliquid placeat? Obcaecati ipsam architecto laboriosam illo repellat, ipsa beatae minus voluptate voluptatum nemo temporibus quas aliquam facilis ullam laudantium incidunt dignissimos dolores eum delectus, sapiente facere deserunt cumque? At fuga voluptas consequuntur minus, sequi voluptatem sunt quia esse rem quam eius, necessitatibus, tempora officiis!</p>',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'judul' => 'Second Title',
        //     'slug' => 'second-title',
        //     'category_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Vel iure corrupti voluptas',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel iure corrupti voluptas, id dignissimos eligendi magnam dolorem incidunt similique explicabo quas blanditiis tenetur temporibus obcaecati in unde? Doloribus atque minus reprehenderit natus? Est corrupti modi, reprehenderit aperiam suscipit qui alias ex esse nesciunt quasi sapiente libero fugiat quo quae praesentium facilis iure sit tenetur architecto ab adipisci. Culpa qui modi accusantium possimus ducimus pariatur amet quam provident harum hic rem maxime placeat illo repellat, ab mollitia a eligendi sunt tenetur consequuntur adipisci!</p><p>Repellat maiores ullam atque aliquam libero, rem dignissimos exercitationem animi accusamus sapiente sequi incidunt pariatur quam veniam optio explicabo culpa dicta quisquam odio aliquid placeat? Obcaecati ipsam architecto laboriosam illo repellat, ipsa beatae minus voluptate voluptatum nemo temporibus quas aliquam facilis ullam laudantium incidunt dignissimos dolores eum delectus, sapiente facere deserunt cumque? At fuga voluptas consequuntur minus, sequi voluptatem sunt quia esse rem quam eius, necessitatibus, tempora officiis!</p>',
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'judul' => 'Third Title',
        //     'slug' => 'third-title',
        //     'category_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Vel iure corrupti voluptas',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel iure corrupti voluptas, id dignissimos eligendi magnam dolorem incidunt similique explicabo quas blanditiis tenetur temporibus obcaecati in unde? Doloribus atque minus reprehenderit natus? Est corrupti modi, reprehenderit aperiam suscipit qui alias ex esse nesciunt quasi sapiente libero fugiat quo quae praesentium facilis iure sit tenetur architecto ab adipisci. Culpa qui modi accusantium possimus ducimus pariatur amet quam provident harum hic rem maxime placeat illo repellat, ab mollitia a eligendi sunt tenetur consequuntur adipisci!</p><p>Repellat maiores ullam atque aliquam libero, rem dignissimos exercitationem animi accusamus sapiente sequi incidunt pariatur quam veniam optio explicabo culpa dicta quisquam odio aliquid placeat? Obcaecati ipsam architecto laboriosam illo repellat, ipsa beatae minus voluptate voluptatum nemo temporibus quas aliquam facilis ullam laudantium incidunt dignissimos dolores eum delectus, sapiente facere deserunt cumque? At fuga voluptas consequuntur minus, sequi voluptatem sunt quia esse rem quam eius, necessitatibus, tempora officiis!</p>',
        //     'user_id' => 2
        // ]);

    }
}
