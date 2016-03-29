@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-md-10 ">
                <div class="container">
                    <h2>CMS Producten</h2>
                    <hr>
                </div>

                <div class="container">
                    <a class="btn btn-primary" href="{{route('cms.newProduct')}}">Nieuw product</a>
                    <br>
                    <br>
                </div>

                <div class="container">
                    @foreach($products as $product)

                        <div class="panel panel-default">
                            <div class="panel-body">


                                <H1><?php echo $product->name ?></H1>
                                <br>

                                <div class="col-md-6 productattr">

                                        <label>Korte omschrijving</label>
                                        <div class="content"><?php echo $product->shortDescription ?></div>



                                        <label>Lange omschrijving</label>
                                        <div class="content"><?php echo $product->longDescription ?></div>



                                        <label>Prijs</label>
                                        <div class="content"><?php echo str_replace('.', ',', $product->price)?></div>




                                </div>

                                <div class="col-md-6 productattr">
                                    <label>Foto</label>
                                    <div class="content"><img src="{{$product->imagesrc}}" alt="{{$product->imagesrc}}" /></div>
                                </div>

                                <div class="col-md-12">
                                    <br><br>
                                    <a class="btn btn-warning col-md-3" href="{{route('cms.editProduct', ['product' => $product->id])}}" >Wijzigen</a>

                                    <form method="POST" action="{{route('cms.deleteProduct', ['product' => $product->id])}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger col-md-3 col-md-offset-6">Verwijderen</button>
                                    </form>

                                </div>

                            </div>
                        </div>

                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection

