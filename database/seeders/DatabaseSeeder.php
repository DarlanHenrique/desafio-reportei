<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\BlogCategory;
use App\Models\Post;
use App\Models\Galery;

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
        User::updateOrCreate([
            'email' => 'admin@admin.com.br'
        ], [
            'name' => 'admin',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt('123456'),
        ]);

        User::updateOrCreate([
            'email' => 'darlan.silva@ice.ufjf.br'
        ], [
            'name' => 'Darlan Henrique da Costa Silva',
            'email' => 'darlan.silva@ice.ufjf.br',
            'password' => bcrypt('123456789'),

        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\BlogCategory::factory(5)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Galery::factory(10)->create();
    }
}
