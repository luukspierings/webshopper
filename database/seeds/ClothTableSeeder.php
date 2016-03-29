<?php

use App\ClothCategory;
use Illuminate\Database\Seeder;

class ClothTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('clothCategory')->delete();

        $clothCategory = new ClothCategory();
        $clothCategory->name = "Jassen";
        $clothCategory->save();

        $clothCategory = new ClothCategory();
        $clothCategory->name = "Broeken";
        $clothCategory->save();

        $clothCategory = new ClothCategory();
        $clothCategory->name = "Hemden";
        $clothCategory->save();

        $clothCategory = new ClothCategory();
        $clothCategory->name = "Onderbroeken";
        $clothCategory->save();
        
    }
}
