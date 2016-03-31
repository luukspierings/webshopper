<?php

namespace App\Http\Controllers;

use App\product;
use App\mainCategory;
use App\subCategory;
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
    private static $smallImageSize      = 250;
    private static $bigImageSize        = 400;

    public function index(){
        if (Auth::user()->isAdmin == 1){

            $products = product::all();

            foreach($products as $prod){
                $pathSmall = $this::$imageDirectory . $prod->id . 'imageSmall' . $this::$imageExtension;
                $pathBig = $this::$imageDirectory . $prod->id . 'imageBig' . $this::$imageExtension;

                if(file_exists ( public_path().$pathSmall )){
                    $prod->imagesrcSmall = $pathSmall;
                }
                else{
                    $prod->imagesrcSmall = $this::$imageDirectory .'imagenotavailable.png';
                }
                if(file_exists ( public_path().$pathBig )){
                    $prod->imagesrcBig = $pathBig;
                }
                else{
                    $prod->imagesrcBig = $this::$imageDirectory .'imagenotavailable.png';
                }

            }

            $values = [];
            $main = mainCategory::all();
            $sub = subCategory::all();

            $values['main'] = $main;
            $values['sub'] = $sub;
            $values['products'] = $products;

            return view('cms/listProduct')->with('values', $values);
        }
        else{
            return redirect('/');
        }
    }

    public function newProduct(){

        $categories = [];
        $main = mainCategory::all();
        $sub = subCategory::all();

        $categories['main'] = $main;
        $categories['sub'] = $sub;

        return view('cms/newProduct')->with('categories', $categories);
    }

    public function createProduct(ProductRequest $request){

        $product = new Product();
        $product->name = $request->name;
        $product->shortDescription = $request->shortDescription;
        $product->longDescription = $request->longDescription;
        $product->price = $request->price;
        $product->mainCategory_id = $request->mainCategory;
        $product->subCategory_id = $request->subCategory;

        $p = Product::create([
            'name' => $product->name,
            'shortDescription' => $product->shortDescription,
            'longDescription' => $product->longDescription,
            'price' => $product->price,
            'mainCategory_id' => $product->mainCategory_id,
            'subCategory_id' => $product->subCategory_id
        ]);


        if($request->file('uploadedImageSmall') != null){
            $image = Image::make($request->file('uploadedImageSmall'));
            $this->storeSmallImage($image, $p->id.'imageSmall');
        }
        if($request->file('uploadedImageBig') != null){
            $image = Image::make($request->file('uploadedImageBig'));
            $this->storeBigImage($image, $p->id.'imageBig');
        }



        return redirect('/cms/producten');

    }

    private function storeSmallImage($image, $id) {
        //Decide whether the image should be constrained by width or by height and set new width and height.
        $resizeWidth = $image->getWidth() < $image->getHeight() ? True : False;
        $newWidth = $resizeWidth == True ? $this::$smallImageSize : null;
        $newHeight = $resizeWidth == False ? $this::$smallImageSize : null;

        //Resize image. Either $newWidth or $newHeight will be null so that the size can be constrained to aspect ratio.
        $image->resize($newWidth, $newHeight, function($constraint) {
            $constraint->aspectRatio();
        });

        //Crop image to $imageSize x $imageSize. We might have to disable this later on.
        $image->crop($this::$smallImageSize, $this::$smallImageSize);

        //Store image as PNG in the $imageDirectory.
        $image->save(public_path() . $this::$imageDirectory . $id . $this::$imageExtension);
    }
    private function storeBigImage($image, $id) {
        //Decide whether the image should be constrained by width or by height and set new width and height.
        $resizeWidth = $image->getWidth() < $image->getHeight() ? True : False;
        $newWidth = $resizeWidth == True ? $this::$bigImageSize : null;
        $newHeight = $resizeWidth == False ? $this::$bigImageSize : null;

        //Resize image. Either $newWidth or $newHeight will be null so that the size can be constrained to aspect ratio.
        $image->resize($newWidth, $newHeight, function($constraint) {
            $constraint->aspectRatio();
        });

        //Crop image to $imageSize x $imageSize. We might have to disable this later on.
        $image->crop($this::$bigImageSize, $this::$bigImageSize);

        //Store image as PNG in the $imageDirectory.
        $image->save(public_path() . $this::$imageDirectory . $id . $this::$imageExtension);
    }



    public function editProduct(Product $product)
    {
        $values = [];
        $main = mainCategory::all();
        $sub = subCategory::all();

        $values['main'] = $main;
        $values['sub'] = $sub;
        $values['product'] = $product;

        return view('cms/editProduct')->with('values', $values);
    }


    public function updateProduct(ProductRequest $request, Product $product){

        $product->name = $request->name;
        $product->shortDescription = $request->shortDescription;
        $product->longDescription = $request->longDescription;
        $product->price = $request->price;
        $product->mainCategory_id = $request->mainCategory;
        $product->subCategory_id = $request->subCategory;
        $product->save();

        if($request->file('uploadedImageSmall') != null){
            $image = Image::make($request->file('uploadedImageSmall'));
            $this->storeSmallImage($image, $product->id.'imageSmall');
        }
        if($request->file('uploadedImageBig') != null){
            $image = Image::make($request->file('uploadedImageBig'));
            $this->storeBigImage($image, $product->id.'imageBig');
        }


        return redirect('/cms/producten');
    }

    public function deleteProduct(Product $product){

        $path = public_path() .$this::$imageDirectory . $product->id . 'imageSmall' . $this::$imageExtension;
        if(file_exists ( $path )){
            unlink($path);
        }
        $path = public_path() .$this::$imageDirectory . $product->id . 'imageBig' . $this::$imageExtension;
        if(file_exists ( $path )){
            unlink($path);
        }

        Product::destroy($product->id);



        return redirect('/cms/producten');
    }


}
