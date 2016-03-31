<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MainTableSeeder::class);
        $this->call(SubTableSeeder::class);
        $this->call(SubMainTableSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
