<?php

use App\subCategory;
use App\mainCategory;
use Illuminate\Database\Seeder;

class SubMainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cloth = subCategory::find(1);
        $dames = mainCategory::find(1);
        $heren = mainCategory::find(2);
        $cloth->main()->attach([$dames->id, $heren->id]);
    }
}
