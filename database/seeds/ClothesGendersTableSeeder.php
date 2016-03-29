<?php

use App\ClothCategory;
use App\GenderCategory;
use Illuminate\Database\Seeder;

class ClothesGendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cloth = ClothCategory::find(1);
        $dames = GenderCategory::find(1);
        $heren = GenderCategory::find(2);
        $cloth->gender()->attach([$dames->id, $heren->id]);
    }
}
