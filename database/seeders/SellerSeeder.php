<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seller::factory(10)
        //     ->create()
        //     ->each(function ($seller) {
        //         $seller->update(['user_id' => DatabaseSeeder::factory()->create()->id]);
        //     });
        Seller::factory(5)->create();
    }
}
