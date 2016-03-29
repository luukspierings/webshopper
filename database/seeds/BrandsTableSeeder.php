<?php

use App\brandCategory;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('brandCategories')->delete();

        $brandCategory = new brandCategory();
        $brandCategory->name = "C&A";
        $brandCategory->save();

        $brandCategory = new brandCategory();
        $brandCategory->name = "ESPRIT";
        $brandCategory->save();

        $brandCategory = new brandCategory();
        $brandCategory->name = "MANGO";
        $brandCategory->save();

        $brandCategory = new brandCategory();
        $brandCategory->name = "River Island";
        $brandCategory->save();

        $brandCategory = new brandCategory();
        $brandCategory->name = "Steps";
        $brandCategory->save();

        $brandCategory = new brandCategory();
        $brandCategory->name = "MANGO";
        $brandCategory->save();

        $brandCategory = new brandCategory();
        $brandCategory->name = "River Island";
        $brandCategory->save();

        $brandCategory = new brandCategory();
        $brandCategory->name = "Steps";
        $brandCategory->save();

    }
}
