<?php

use App\subCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->delete();

        $product = new \App\Product();
        $product->name = "blauwe trui";
        $product->price = 9;
        $product->mainCategory_id = 1;
        $product->subCategory_id = 2;
        $product->shortDescription = "Trui";
        $product->longDescription = "Mooie bluawe trui";
        $product->save();

        $product = new \App\Product();
        $product->name = "rode trui";
        $product->price = 9;
        $product->mainCategory_id = 2;
        $product->subCategory_id = 1;
        $product->shortDescription = "Trui";
        $product->longDescription = "Mooie Rode trui";
        $product->save();

        $product = new \App\Product();
        $product->name = "rode broek";
        $product->price = 17;
        $product->mainCategory_id = 2;
        $product->subCategory_id = 2;
        $product->shortDescription = "broek";
        $product->longDescription = "Mooie Rode broek";
        $product->save();

        $product = new \App\Product();
        $product->name = "roze broek";
        $product->price = 26;
        $product->mainCategory_id = 1;
        $product->subCategory_id = 2;
        $product->shortDescription = "broek";
        $product->longDescription = "Mooie roze broek";
        $product->save();




    }
}
