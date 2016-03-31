@extends('layouts.app')

@section('content')
    <div class="container page-wrap">
        <div class="row">

            <div class="col-md-12 breadcrumb">
                <div class="container">
                    <a href="/">Home</a>
                    <span>&#62;</span>
                    <a href="/shop/{{$main->id}}"><?php echo $main->name ?></a>
                    <span>&#62;</span>
                    <a href="/shop/{{$main->id.'/'.$sub->id}}" ><?php echo $sub->name?></a>
                    <span>&#62;</span>
                    <a href="/product/{{$product->id}}" ><?php echo $product->name?></a>


                </div>

            </div>
            <!-- preview image -->
            <div class="col-md-2 previewthumb">
                <div class="previewimage">
                    <img class="img-responsive" src="http://placehold.it/150x150" alt="">
                </div>
                <div class="previewimage">
                    <img class="img-responsive" src="http://placehold.it/150x150" alt="">
                </div>
                <div class="previewimage">
                    <img class="img-responsive" src="http://placehold.it/150x150" alt="">
                </div>
            </div>

            <!-- product image -->
            <div class="col-md-10 productcolumn nospacing">
                <h2 class="text-center productname">{{$product->name}}</h2>

                <hr>

                <div class="col-md-6">
                    <div class="productimage">
                        <img class="img-responsive" src="http://placehold.it/500x700" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="productdetails">
                        <h3>Artikelomschrijving</h3>
                        <p>{{$product->longDescription}}</p>

                        <hr>

                        <h3>Informatie</h3>
                        <p>{{$product->shortDescription}}</p>

                        <h3>€ {{$product->price}}</h3>

                        <hr>

                        <select>
                            <option selected>Maat 34 - Beschikbbaar</option>
                            <option>Maat 36 - Beschikbbaar</option>
                            <option>Maat 38 - Beschikbbaar</option>
                            <option>Maat 40 - Beschikbbaar</option>
                            <option>Maat 42 - Niet Beschikbbaar</option>
                        </select>




                        <hr>

                        <form method="POST" action="{{URL::action('ShoppingcartController@PostShoppingcart')}} ">
                            <input name="_method" type="hidden" value="PATCH">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input name="product" type="hidden" value="{{ $product->id }}"/>
                            <input type="submit" name="Submit" value="submit">
                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection