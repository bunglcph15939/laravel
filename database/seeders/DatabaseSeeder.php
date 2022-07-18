<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Post;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
          //  User::factory(10)->create();//sinh ra 10 bản ghi theo userfactory
          User::factory(10)->create();
    }
}
