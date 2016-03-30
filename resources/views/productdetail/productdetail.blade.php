@extends('layouts.app')

@section('content')
    <div class="container page-wrap">
        <div class="row">

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



                        <button class="btnwinkelmand" type="submit" value="Submit"/>In de winkelmand</button>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection