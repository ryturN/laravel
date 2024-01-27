<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::->create();

        User::create([
            'name' => 'ryan',
            'email' => 'ryan@example.com',
            'password' => bcrypt('ryan123')
        ]);
        User::create([
            'name' => 'John',
            'email' => 'John@example.com',
            'password' => bcrypt('john123')
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Blog::create([
            'title'=> 'Judul ke - 1',
            'slug' => "judule-ke-1",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum!",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum! Officia odio eveniet minus nam, fuga, explicabo quis earum, quae quas praesentium expedita dicta velit sequi incidunt ex veniam. Reprehenderit nesciunt at, nobis voluptatum asperiores eaque neque architecto nihil adipisci dignissimos. Adipisci similique fugit numquam ab error quibusdam debitis rem facere odio aperiam vero, iste blanditiis inventore perferendis? Mollitia hic accusamus et, officia magni error alias!",
            "category_id" => 1,
            "user_id" => 1
        ]);
        Blog::create([
            'title'=> 'Judul ke - 2',
            'slug' => "judule-ke-2",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum!",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum! Officia odio eveniet minus nam, fuga, explicabo quis earum, quae quas praesentium expedita dicta velit sequi incidunt ex veniam. Reprehenderit nesciunt at, nobis voluptatum asperiores eaque neque architecto nihil adipisci dignissimos. Adipisci similique fugit numquam ab error quibusdam debitis rem facere odio aperiam vero, iste blanditiis inventore perferendis? Mollitia hic accusamus et, officia magni error alias!",
            "category_id" => 2,
            "user_id" => 1
        ]);
        Blog::create([
            'title'=> 'Judul ke - 3',
            'slug' => "judule-ke-3",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum!",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum! Officia odio eveniet minus nam, fuga, explicabo quis earum, quae quas praesentium expedita dicta velit sequi incidunt ex veniam. Reprehenderit nesciunt at, nobis voluptatum asperiores eaque neque architecto nihil adipisci dignissimos. Adipisci similique fugit numquam ab error quibusdam debitis rem facere odio aperiam vero, iste blanditiis inventore perferendis? Mollitia hic accusamus et, officia magni error alias!",
            "category_id" => 1,
            "user_id" => 1
        ]);
        Blog::create([
            'title'=> 'Judul ke - 4',
            'slug' => "judule-ke-4",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum!",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum! Officia odio eveniet minus nam, fuga, explicabo quis earum, quae quas praesentium expedita dicta velit sequi incidunt ex veniam. Reprehenderit nesciunt at, nobis voluptatum asperiores eaque neque architecto nihil adipisci dignissimos. Adipisci similique fugit numquam ab error quibusdam debitis rem facere odio aperiam vero, iste blanditiis inventore perferendis? Mollitia hic accusamus et, officia magni error alias!",
            "category_id" => 2,
            "user_id" => 1
        ]);
        Blog::create([
            'title'=> 'Judul ke - 5',
            'slug' => "judule-ke-5",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum!",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil impedit ab eaque doloremque earum iste corporis maiores expedita! Minima quam aut facere facilis, tempore ea, unde nisi expedita atque rem dicta beatae nobis eius esse aliquam ratione autem necessitatibus suscipit a nemo quisquam illum! Officia odio eveniet minus nam, fuga, explicabo quis earum, quae quas praesentium expedita dicta velit sequi incidunt ex veniam. Reprehenderit nesciunt at, nobis voluptatum asperiores eaque neque architecto nihil adipisci dignissimos. Adipisci similique fugit numquam ab error quibusdam debitis rem facere odio aperiam vero, iste blanditiis inventore perferendis? Mollitia hic accusamus et, officia magni error alias!",
            "category_id" => 1,
            "user_id" => 2,
        ]);
}
}


