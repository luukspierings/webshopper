<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Auth;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic   as Image;

class CmsController extends Controller
{

    private static $imageDirectory      = '/images/productImages/';
    private static $imageExtension      = '.png';
    private static $imageSize           = 250;

    public function index(){
        if (Auth::user()->isAdmin == 1){

            $products = product::all();

            foreach($products as $prod){
                $prod->imagesrc = $this::$imageDirectory . $prod->name . $this::$imageExtension;
            }

            return view('pages/cms')->with('products', $products);
        }
        else{
            return redirect('/');
        }
    }

    public function newProduct(){
        return view('pages/newProduct');
    }

    public function createProduct(ProductRequest $request){

        $product = new Product();
        $product->name = $request->name;
        $product->shortDescription = $request->shortDescription;
        $product->longDescription = $request->longDescription;
        $product->price = $request->price;

        $image = Image::make($request->file('uploadedImage'));
        $this->storeImage($image, $request->name);

        Product::create([
            'name' => $product->name,
            'shortDescription' => $product->shortDescription,
            'longDescription' => $product->longDescription,
            'price' => $product->price
        ]);

        return redirect('/cms');

    }

    private function storeImage($image, $id) {
        //Decide whether the image should be constrained by width or by height and set new width and height.
        $resizeWidth = $image->getWidth() < $image->getHeight() ? True : False;
        $newWidth = $resizeWidth == True ? $this::$imageSize : null;
        $newHeight = $resizeWidth == False ? $this::$imageSize : null;

        //Resize image. Either $newWidth or $newHeight will be null so that the size can be constrained to aspect ratio.
        $image->resize($newWidth, $newHeight, function($constraint) {
            $constraint->aspectRatio();
        });

        //Crop image to $imageSize x $imageSize. We might have to disable this later on.
        $image->crop($this::$imageSize, $this::$imageSize);

        //Store image as PNG in the $imageDirectory.
        $image->save(public_path() . $this::$imageDirectory . $id . $this::$imageExtension);
    }



    public function editProduct(Product $product)
    {
        return view('pages/editProduct')->with('product', $product);
    }


    public function updateProduct(ProductRequest $request, Product $product){

        $product->name = $request->name;
        $product->shortDescription = $request->shortDescription;
        $product->longDescription = $request->longDescription;
        $product->price = $request->price;
        $product->save();

        return redirect('/cms');
    }

    public function deleteProduct(Product $product){
        Product::destroy($product->id);

        return redirect('/cms');
    }


}
