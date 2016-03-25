@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <div class="container">
                    <h2>CMS</h2>
                    <hr>
                </div>

                <div class="container">

                    @foreach($products as $product)
                        <div class="col-md-6 ">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <label>Korte beschrijving</label>
                                <p><?php echo $product->shortDescription ?></p>

                                <label>Prijs</label>
                                <p><?php echo $product->price?></p>

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
