@extends('layouts.app')

@section('content')
    <div class="container page-wrap">
        <div class="row">

            <!-- Filters -->
            <div class="col-md-2 filtercolumn">

                <h3>Kleding</h3>
                <ul class="taxons-list filterlist">
                    @foreach($categories as $category)
                        <li><a class="filterlink" href="{{ URL::action('ShopController@getView', [$main, $category->id]) }}">{{$category->name}}</a></li>
                    @endforeach
                </ul>



                <br>

            </div>

            <!-- Producten -->
            <div class="col-md-10 productthumb nospacing">
                <h3 class="text-center">{{$main->name}}</h3>

                <div class="productgrid">
                    @foreach($products as $value)
                    <div class="col-lg-4 col-md-4 col-xs-4 nospacing">
                        <div class="product">
                            <a class="thumbnail" href="{{ URL::action('ProductdetailController@getIndex', $value->id) }}">
                                <img class="img-responsive" src="http://placehold.it/350x300" alt="">
                                <h4 class="text-center">{{$value->shortDescription}}</h4>
                                <h3 class="text-center">€ {{$value->price}}</h3>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
