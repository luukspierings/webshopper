@extends('layouts.app')

@section('content')
<div class="container page-wrap">
    <div class="row">

        <!-- Filters -->
        <div class="col-md-2 filtercolumn">

            <h3>Kleding</h3>
            <ul class="taxons-list filterlist">
                <li><a class="filterlink" href="#">Jassen</a></li>
                <li><a class="filterlink" href="#">Broeken</a></li>
                <li><a class="filterlink" href="#">Blouses</a></li>
                <li><a class="filterlink" href="#">Truien</a></li>
                <li><a class="filterlink" href="#">Sportkleding</a></li>
                <li><a class="filterlink" href="#">T-shirts</a></li>
            </ul>

            <br>

        </div>

        <!-- Producten -->
        <div class="col-md-10 productthumb nospacing">
            <h3 class="text-center">{{$gender->name}}</h3>


            <!--
            <div class="productgrid">
                {{--@foreach($product as $value)
                <div class="col-lg-4 col-md-4 col-xs-4 nospacing">
                    <div class="product">
                        <img class="img-responsive" src="http://placehold.it/350x300" alt="">
                        <h4 class="text-center">{{$value->shortDescription}}</h4>
                        <h3 class="text-center">€ {{$value->price}}</h3>
                    </div>
                </div>
                @endforeach
                --}}
            </div>
            -->


        </div>
    </div>
</div>
@endsection
