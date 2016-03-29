<?php

use App\brandCategory;
use App\mainCategory;
use Illuminate\Database\Seeder;

class BrandMainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = brandCategory::find(1);
        $dames = mainCategory::find(1);
        $heren = mainCategory::find(2);
        $brand->mains()->attach([$dames->id, $heren->id]);
    }
}
