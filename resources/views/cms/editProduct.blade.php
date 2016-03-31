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

                            <form method="POST" action="{{ route('cms.editProduct', ['product' => $values['product']]) }}" enctype="multipart/form-data">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}


                                <div class="form-group">
                                    <label for="comment">Naam</label>
                                    <p><input id="name" name="name" class="form-control" value="{{ $values['product']->name }}"/></p>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="comment">Korte omschrijving</label>
                                    <p><input id="shortDescription" name="shortDescription" class="form-control" value="{{ $values['product']->shortDescription }}"/></p>
                                    @if($errors->has('shortDescription'))
                                        <span class="help-block">{{ $errors->first('shortDescription') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="comment">Lange omschrijving</label>
                                    <p><input id="longDescription" name="longDescription" class="form-control" value="{{ $values['product']->longDescription }}"/></p>
                                    @if($errors->has('longDescription'))
                                        <span class="help-block">{{ $errors->first('longDescription') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="comment">Prijs</label>
                                    <p><input id="price" name="price" class="form-control" type="number" value="{{ $values['product']->price }}" step="any"/></p>
                                </div>

                                <div class="form-group">
                                    <label>Categorie</label>
                                    <select id="mainCategory" name="mainCategory" class="form-control" >
                                        @foreach($values['main'] as $category)
                                            @if($category->id == $values['product']->mainCategory_id)
                                                <option selected value="{{$category->id}}"><?php echo $category->name?></option>
                                            @else
                                                <option value="{{$category->id}}"><?php echo $category->name?></option>
                                            @endif


                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Sub-categorie</label>
                                    <select id="subCategory" name="subCategory" class="form-control">
                                        @foreach($values['sub'] as $category)
                                            @if($category->id == $values['product']->subCategory_id)
                                                <option selected value="{{$category->id}}"><?php echo $category->name?></option>
                                            @else
                                                <option value="{{$category->id}}"><?php echo $category->name?></option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Kleine foto</label>
                                    <p><input type="file" class="form-control-file" name="uploadedImageSmall" accept="image/*" value="" ></p>
                                    @if($errors->has('uploadedImageSmall'))
                                        <span class="help-block">{{ $errors->first('uploadedImageSmall') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Grote foto</label>
                                    <p><input type="file" class="form-control-file" name="uploadedImageBig" accept="image/*" value="" ></p>
                                    @if($errors->has('uploadedImageBig'))
                                        <span class="help-block">{{ $errors->first('uploadedImageBig') }}</span>
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

