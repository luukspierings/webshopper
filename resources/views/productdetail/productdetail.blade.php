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

            <!-- product image -->
            <div class="col-md-12 productcolumn nospacing">
                <h2 class="text-center productname">{{$product->name}}</h2>

                <hr>

                <div class="col-md-4 col-md-offset-1">
                    <div class="productimage">
                        <img class="img-responsive" src="{{$product->imagesrcBig}}" alt="">
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="productdetails">
                        <h3>Artikelomschrijving</h3>
                        <p style="word-break: break-all">{{$product->longDescription}}</p>

                        <hr>

                        <h3>Informatie</h3>
                        <p style="word-break: break-all">{{$product->shortDescription}}</p>

                        <h3>€ {{$product->price}}</h3>

                        <hr>

                        <form method="POST" action="{{URL::action('ShoppingcartController@PostShoppingcart')}} ">
                            <input name="_method" type="hidden" value="PATCH">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input name="product" type="hidden" value="{{ $product->id }}"/>
                            <input type="hidden" name="method" value=1/>
                            <input type="submit" name="Submit" value="submit">
                        </form>

                        <br>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection