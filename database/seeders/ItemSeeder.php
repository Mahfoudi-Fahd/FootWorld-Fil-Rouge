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
        $statuses = ['available', 'out of stock'];

        // Seed 50 items
        for ($i = 1; $i <= 10; $i++) {
            Item::create([
                'name' => "Item $i",
                'description' => "Description for item $i",
                'category_id' => $categories->random()->id,
                'image' => "image$i.png",
                'price' => rand(100, 1000),
                'status' => $statuses[array_rand($statuses)],
                // 'user_id' => $users->random()->id,
            ]);
        }
    }
}
