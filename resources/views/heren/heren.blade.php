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

                <h3>Merken</h3>
                <ul class="taxons-list list-group filterlist">
                    <li><a class="filterlink" href="#">C&A</a></li>
                    <li><a class="filterlink" href="#">ESPRIT</a></li>
                    <li><a class="filterlink" href="#">MANGO</a></li>
                    <li><a class="filterlink" href="#">River Island</a></li>
                    <li><a class="filterlink" href="#">Steps</a></li>
                </ul>
            </div>

            <!-- Producten -->
            <div class="col-md-10 productthumb nospacing">
                <h3 class="text-center">Herenmode</h3>

                <div class="productgrid">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="col-lg-4 col-md-4 col-xs-4 nospacing">
                            <div class="product">
                                <img class="img-responsive" src="http://placehold.it/350x300" alt="">
                                <h4 class="text-center">Naam van product</h4>
                                <h3 class="text-center">€ 9,45</h3>
                            </div>
                        </div>
                    @endfor

                </div>



            </div>
        </div>
    </div>
@endsection
