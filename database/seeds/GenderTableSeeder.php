<?php

use App\GenderCategory;
use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('genderCategory')->delete();

        $GenderCategory = new GenderCategory();
        $GenderCategory->name = "Dames";
        $GenderCategory->save();

        $GenderCategory = new GenderCategory();
        $GenderCategory->name = "Heren";
        $GenderCategory->save();



    }
}
