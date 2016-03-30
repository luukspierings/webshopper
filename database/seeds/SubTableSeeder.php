<?php

use App\subCategory;
use Illuminate\Database\Seeder;

class SubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('subCategory')->delete();

        $subCategory = new subCategory();
        $subCategory->name = "Jassen";
        $subCategory->save();

        $subCategory = new subCategory();
        $subCategory->name = "Broeken";
        $subCategory->save();

        $subCategory = new subCategory();
        $subCategory->name = "Hemden";
        $subCategory->save();

        $subCategory = new subCategory();
        $subCategory->name = "Onderbroeken";
        $subCategory->save();
        
    }
}
