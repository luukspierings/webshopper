<?php

use App\mainCategory;
use Illuminate\Database\Seeder;

class MainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('mainCategories')->delete();

        $mainCategory = new mainCategory();
        $mainCategory->name = "Dames";
        $mainCategory->save();

        $mainCategory = new mainCategory();
        $mainCategory->name = "Heren";
        $mainCategory->save();



    }
}
