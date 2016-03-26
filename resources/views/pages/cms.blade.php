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
                        <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">


                                <H1><?php echo $product->name ?></H1>

                                <div class="productattr">
                                    <label>Korte omschrijving</label>
                                    <div class="content"><?php echo $product->shortDescription ?></div>
                                </div>

                                <div class="productattr">
                                    <label>Lange omschrijving</label>
                                    <div class="content"><?php echo $product->longDescription ?></div>
                                </div>

                                <div class="productattr">
                                    <label>Prijs</label>
                                    <div class="content"><?php echo str_replace('.', ',', $product->price)?></div>
                                </div>

                                <label>Foto</label>
                                <div class="content"><?php echo $product->imagePath ?></div>

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

