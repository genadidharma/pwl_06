<?php

namespace Database\Seeders;

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
            GoodsSeeder::class,
            CustomerSeeder::class,
            EmployeeSeeder::class,
            SupplierSeeder::class
        ]);
    }
}
