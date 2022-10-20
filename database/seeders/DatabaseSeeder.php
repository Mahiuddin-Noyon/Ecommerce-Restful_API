<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use Carbon\Factory;
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
        
        $this->call([
            UserTableSeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class
        ]);
    }
}
