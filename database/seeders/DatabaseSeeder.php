<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'alf',
        //     'email' => 'alfurqon.alf@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::create([
            'name' => 'Lucia Vicent',
            'username' => 'lucialf',
            'email' => 'luciaalf@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(5)->create();

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'judul' => 'Post Pertama',
        //     'slug' => 'post-pertama',
        //     'kutipan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore',
        //     'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore distinctio assumenda! Consequuntur assumenda unde hic earum vel a fuga, quas consequatur quidem tenetur veritatis accusantium velit quos similique exercitationem, voluptatum officia inventore explicabo architecto. Suscipit recusandae perferendis veniam corrupti sit. Obcaecati commodi vero est dolore hic, quibusdam, recusandae possimus nobis, non mollitia quos adipisci. Sit molestias inventore facilis eius, similique, totam dolor laboriosam vero doloribus corrupti quisquam quam soluta, eligendi optio neque laborum iusto accusamus. Minima magnam aspernatur velit tenetur ducimus quas nesciunt ut sed ullam corporis totam molestias, natus corrupti sunt rerum, recusandae asperiores dolore earum ratione similique maiores distinctio optio. Tempora ipsa, qui deserunt quo incidunt exercitationem? Debitis nihil, neque quasi earum, hic placeat quibusdam eum minus quas a nam asperiores ratione impedit aliquid quos beatae consectetur corporis excepturi quisquam ea! Voluptas, nam hic. Harum quae ad doloribus? Recusandae, mollitia obcaecati magnam fuga quidem temporibus? Sequi laboriosam ea, nemo vel, saepe tenetur ipsam neque consectetur reprehenderit, cumque alias impedit quos distinctio aut deserunt! Error itaque aperiam unde similique distinctio nesciunt aspernatur eveniet ad eligendi quo, excepturi minus incidunt expedita placeat temporibus consequatur veniam architecto voluptatem illo modi possimus voluptatum repellendus facilis fuga. Et, iste ipsam?',
        //     'kategori_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'judul' => 'Post Kedua',
        //     'slug' => 'post-kedua',
        //     'kutipan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore',
        //     'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore distinctio assumenda! Consequuntur assumenda unde hic earum vel a fuga, quas consequatur quidem tenetur veritatis accusantium velit quos similique exercitationem, voluptatum officia inventore explicabo architecto. Suscipit recusandae perferendis veniam corrupti sit. Obcaecati commodi vero est dolore hic, quibusdam, recusandae possimus nobis, non mollitia quos adipisci. Sit molestias inventore facilis eius, similique, totam dolor laboriosam vero doloribus corrupti quisquam quam soluta, eligendi optio neque laborum iusto accusamus. Minima magnam aspernatur velit tenetur ducimus quas nesciunt ut sed ullam corporis totam molestias, natus corrupti sunt rerum, recusandae asperiores dolore earum ratione similique maiores distinctio optio. Tempora ipsa, qui deserunt quo incidunt exercitationem? Debitis nihil, neque quasi earum, hic placeat quibusdam eum minus quas a nam asperiores ratione impedit aliquid quos beatae consectetur corporis excepturi quisquam ea! Voluptas, nam hic. Harum quae ad doloribus? Recusandae, mollitia obcaecati magnam fuga quidem temporibus? Sequi laboriosam ea, nemo vel, saepe tenetur ipsam neque consectetur reprehenderit, cumque alias impedit quos distinctio aut deserunt! Error itaque aperiam unde similique distinctio nesciunt aspernatur eveniet ad eligendi quo, excepturi minus incidunt expedita placeat temporibus consequatur veniam architecto voluptatem illo modi possimus voluptatum repellendus facilis fuga. Et, iste ipsam?',
        //     'kategori_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'judul' => 'Post Ketiga',
        //     'slug' => 'post-ketiga',
        //     'kutipan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore',
        //     'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore distinctio assumenda! Consequuntur assumenda unde hic earum vel a fuga, quas consequatur quidem tenetur veritatis accusantium velit quos similique exercitationem, voluptatum officia inventore explicabo architecto. Suscipit recusandae perferendis veniam corrupti sit. Obcaecati commodi vero est dolore hic, quibusdam, recusandae possimus nobis, non mollitia quos adipisci. Sit molestias inventore facilis eius, similique, totam dolor laboriosam vero doloribus corrupti quisquam quam soluta, eligendi optio neque laborum iusto accusamus. Minima magnam aspernatur velit tenetur ducimus quas nesciunt ut sed ullam corporis totam molestias, natus corrupti sunt rerum, recusandae asperiores dolore earum ratione similique maiores distinctio optio. Tempora ipsa, qui deserunt quo incidunt exercitationem? Debitis nihil, neque quasi earum, hic placeat quibusdam eum minus quas a nam asperiores ratione impedit aliquid quos beatae consectetur corporis excepturi quisquam ea! Voluptas, nam hic. Harum quae ad doloribus? Recusandae, mollitia obcaecati magnam fuga quidem temporibus? Sequi laboriosam ea, nemo vel, saepe tenetur ipsam neque consectetur reprehenderit, cumque alias impedit quos distinctio aut deserunt! Error itaque aperiam unde similique distinctio nesciunt aspernatur eveniet ad eligendi quo, excepturi minus incidunt expedita placeat temporibus consequatur veniam architecto voluptatem illo modi possimus voluptatum repellendus facilis fuga. Et, iste ipsam?',
        //     'kategori_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'judul' => 'Post Keempat',
        //     'slug' => 'post-keempat',
        //     'kutipan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore',
        //     'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non eaque dolore distinctio assumenda! Consequuntur assumenda unde hic earum vel a fuga, quas consequatur quidem tenetur veritatis accusantium velit quos similique exercitationem, voluptatum officia inventore explicabo architecto. Suscipit recusandae perferendis veniam corrupti sit. Obcaecati commodi vero est dolore hic, quibusdam, recusandae possimus nobis, non mollitia quos adipisci. Sit molestias inventore facilis eius, similique, totam dolor laboriosam vero doloribus corrupti quisquam quam soluta, eligendi optio neque laborum iusto accusamus. Minima magnam aspernatur velit tenetur ducimus quas nesciunt ut sed ullam corporis totam molestias, natus corrupti sunt rerum, recusandae asperiores dolore earum ratione similique maiores distinctio optio. Tempora ipsa, qui deserunt quo incidunt exercitationem? Debitis nihil, neque quasi earum, hic placeat quibusdam eum minus quas a nam asperiores ratione impedit aliquid quos beatae consectetur corporis excepturi quisquam ea! Voluptas, nam hic. Harum quae ad doloribus? Recusandae, mollitia obcaecati magnam fuga quidem temporibus? Sequi laboriosam ea, nemo vel, saepe tenetur ipsam neque consectetur reprehenderit, cumque alias impedit quos distinctio aut deserunt! Error itaque aperiam unde similique distinctio nesciunt aspernatur eveniet ad eligendi quo, excepturi minus incidunt expedita placeat temporibus consequatur veniam architecto voluptatem illo modi possimus voluptatum repellendus facilis fuga. Et, iste ipsam?',
        //     'kategori_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
