<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use CreatePermissionTables;
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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'fahd',
            'email' => 'fahd@gmail.com',
            'role' => 'User',
        ]);
        Category::factory(10)->create();
        $this->call(ItemSeeder::class);

        $this->call([
            PermissionTableSeeder::class,
        ]);
        $this->call([
            CreateAdminUserSeeder::class,
        ]);
    }
}
