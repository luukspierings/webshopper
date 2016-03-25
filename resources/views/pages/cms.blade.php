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

                    @foreach($products as $value)
                        <div class="col-md-6 ">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <form method="POST" enctype="multipart/form-data" action="{{ route('cms.editProduct', ['product' => $value]) }}">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label>Kleine beschrijving</label>
                                        <p><input class="form-control" value="{{ $value->shortDescription }}"/></p>
                                    </div>

                                    <div class="form-group">
                                        <label>Prijs</label>
                                        <p><input class="form-control" type="number" value="{{ $value->price }}" min="0"/></p>
                                    </div>

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <p><input type="file" class="form-control-file" value="{{ $value->imagePath }}" name="uploadedImage" accept="image/*" required></p>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <a class="btn btn-primary col-md-3" type="submit">Opslaan</a>
                                    </div>
                                </form>

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
