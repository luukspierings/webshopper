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
                <h2 class="text-center productname">Naam product</h2>

                <hr>

                <div class="col-md-6">
                    <div class="productimage">
                        <img class="img-responsive" src="http://placehold.it/500x700" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="productdetails">
                        <h3>Artikelomschrijving</h3>
                        <p>Regular dames jeans van Yessica uit de C&A collectie, uitgevoerd in een licht elastische katoenkwaliteit.
                            Het model is voorzien van opgestikte slijtage details, een rits- en knoopsluiting, riemlussen, 2 steekzakken en 1 muntzakje aan de voorkant en 2
                        </p>

                        <hr>

                        <h3>Informatie</h3>
                        <ul class="productdetailslist">
                            <li>Materiaal: 75% katoen/23% polyester/2% elasthan</li>
                            <li>Kleur: Donkergrijs</li>
                            <li>Binnenbeenlengte (cm): 80</li>
                        </ul>

                        <h3>€ 9,45</h3>

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