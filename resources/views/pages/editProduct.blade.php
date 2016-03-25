@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="container">
                <h2>Product wijzigen</h2>
                <hr>
            </div>

            <div class="container">

                <div class="col-md-6 ">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <form method="POST" action="{{ route('cms.editProduct', ['product' => $product]) }}">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="comment">Kleine beschrijving</label>
                                    <p><input id="shortDescription" name="shortDescription" class="form-control" value="{{ $product->shortDescription }}"/></p>
                                </div>

                                <div class="form-group">
                                    <label for="comment">Prijs</label>
                                    <p><input id="price" name="price" class="form-control" type="number" value="{{ $product->price }}" min="0"/></p>
                                </div>

                                {{--<div class="form-group">--}}
                                    {{--<label>Foto</label>--}}
                                    {{--<p><input type="file" class="form-control-file" value="{{ $product->imagePath }}" name="uploadedImage" accept="image/*"></p>--}}
                                {{--</div>--}}
                                <br>

                                <div class="form-group">
                                    <button class="btn btn-primary col-md-3" type="submit">Opslaan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

