@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-md-10 ">
                <div class="container">
                    <h2>CMS</h2>
                    <hr>
                </div>

                <div class="container">
                    <a class="btn btn-primary" href="{{route('cms.newProduct')}}">Nieuw product</a>
                    <br>
                    <br>
                </div>


                <div class="container">



                    @foreach($products as $product)
                        <div class="col-md-6 ">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <label>Korte omschrijving</label>
                                <p><?php echo $product->shortDescription ?></p>

                                <label>Lange omschrijving</label>
                                <p><?php echo $product->longDescription ?></p>

                                <label>Prijs</label>
                                <p><?php echo str_replace('.', ',', $product->price)?></p>

                                <label>Foto</label>
                                <p><?php echo $product->imagePath ?></p>

                                <br>
                                <a class="btn btn-warning col-md-3" href="{{route('cms.editProduct', ['product' => $product->id])}}" >Wijzigen</a>

                                <a class="btn btn-danger col-md-3 col-md-offset-6">Verwijderen</a>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection

