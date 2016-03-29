<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic   as Image;

class CmsProductsController extends Controller
{

    private static $imageDirectory      = '/images/productImages/';
    private static $imageExtension      = '.png';
    private static $imageSize           = 250;

    public function index(){
        if (Auth::user()->isAdmin == 1){

            $products = product::all();

            foreach($products as $prod){
                $prod->imagesrc = $this::$imageDirectory . $prod->id . 'image' . $this::$imageExtension;
            }

            return view('cms/listProduct')->with('products', $products);
        }
        else{
            return redirect('/');
        }
    }

    public function newProduct(){
        return view('cms/newProduct');
    }

    public function createProduct(ProductRequest $request){

        $product = new Product();
        $product->name = $request->name;
        $product->shortDescription = $request->shortDescription;
        $product->longDescription = $request->longDescription;
        $product->price = $request->price;

        $p = Product::create([
            'name' => $product->name,
            'shortDescription' => $product->shortDescription,
            'longDescription' => $product->longDescription,
            'price' => $product->price
        ]);

        $image = Image::make($request->file('uploadedImage'));
        $this->storeImage($image, $p->id.'image');

        return redirect('/cms/producten');

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
        return view('cms/editProduct')->with('product', $product);
    }


    public function updateProduct(ProductRequest $request, Product $product){

        $product->name = $request->name;
        $product->shortDescription = $request->shortDescription;
        $product->longDescription = $request->longDescription;
        $product->price = $request->price;
        $product->save();

        $image = Image::make($request->file('uploadedImage'));
        $this->storeImage($image, $product->id.'image');

        return redirect('/cms/producten');
    }

    public function deleteProduct(Product $product){

        unlink(public_path() .$this::$imageDirectory . $product->id . 'image' . $this::$imageExtension);
        Product::destroy($product->id);



        return redirect('/cms/producten');
    }


}
