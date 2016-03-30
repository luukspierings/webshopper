@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <div class="container">
                    <h2>Nieuwe sub-categorie</h2>
                    <hr>
                </div>

                <div class="container">

                    <div class="col-md-6 ">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <form method="POST" action="{{ route('cms.createSubCategory')}}">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="comment">Naam</label>
                                        <p><input id="name" name="name" class="form-control"/></p>
                                        @if($errors->has('name'))
                                            <span class="help-block">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <button class="btn btn-primary col-md-5" type="submit">Sub-categorie toevoegen</button>
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

