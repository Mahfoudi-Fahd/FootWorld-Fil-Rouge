<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all categories and users
        $categories = Category::all();
        $users = User::all();

        // Seed 50 items
        for ($i = 1; $i <= 50; $i++) {
            Item::create([
                'name' => "Item $i",
                'description' => "Description for item $i",
                'category_id' => $categories->random()->id,
                'image' => "image$i.jpg",
                'price' => rand(100, 1000),
                'status' => 'available',
                // 'user_id' => $users->random()->id,
            ]);
        }
    }
}
