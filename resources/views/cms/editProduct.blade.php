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

                            <form method="POST" action="{{ route('cms.editProduct', ['product' => $product]) }}" enctype="multipart/form-data">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}


                                <div class="form-group">
                                    <label for="comment">Naam</label>
                                    <p><input id="name" name="name" class="form-control" value="{{ $product->name }}"/></p>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="comment">Korte omschrijving</label>
                                    <p><input id="shortDescription" name="shortDescription" class="form-control" value="{{ $product->shortDescription }}"/></p>
                                    @if($errors->has('shortDescription'))
                                        <span class="help-block">{{ $errors->first('shortDescription') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="comment">Lange omschrijving</label>
                                    <p><input id="longDescription" name="longDescription" class="form-control" value="{{ $product->longDescription }}"/></p>
                                    @if($errors->has('longDescription'))
                                        <span class="help-block">{{ $errors->first('longDescription') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="comment">Prijs</label>
                                    <p><input id="price" name="price" class="form-control" type="number" value="{{ $product->price }}" step="any"/></p>
                                </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <p><input type="file" class="form-control-file" name="uploadedImage" accept="image/*" ></p>
                                    @if($errors->has('uploadedImage'))
                                        <span class="help-block">{{ $errors->first('uploadedImage') }}</span>
                                    @endif
                                </div>
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

