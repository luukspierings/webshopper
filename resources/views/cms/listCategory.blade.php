

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-eq-height">
            <div style="margin-bottom: 100px" class="col-md-10 ">
                <div class="container">
                    <h2>CMS Categorieën</h2>
                    <hr>
                </div>

                <div class="col-md-6">

                    <h3>Categorieën</h3>

                    @foreach($categories['main'] as $category)
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="col-md-12">
                                    <h4><?php echo $category->name ?></h4>
                                </div>
                                <br><br>
                                <div class="content">
                                    <a class="btn btn-default col-md-5 " href="{{route('cms.editMainCategory', ['mainCategory' => $category->id])}}">Wijzigen</a>
                                </div>
                                <div class="content">
                                    <form method="POST" action="{{route('cms.deleteMainCategory', ['mainCategory' => $category->id])}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-default col-md-5 col-md-offset-2">Verwijderen</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-6">

                    <h3>Sub-categorieën</h3>

                    @foreach($categories['sub'] as $category)
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="content col-md-12">
                                    <h4><?php echo $category->name ?></h4>
                                </div>
                                <br><br>
                                <div class="content">
                                    <a class="btn btn-default col-md-5 " href="{{route('cms.editSubCategory', ['subCategory' => $category->id])}}">Wijzigen</a>
                                </div>
                                <div class="content">
                                    <form method="POST" action="{{route('cms.deleteSubCategory', ['subCategory' => $category->id])}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-default col-md-5 col-md-offset-2">Verwijderen</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endforeach



                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                        <a class="btn btn-primary col-md-12" href="{{route('cms.newMainCategory')}}">Nieuwe categorie</a>

                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-primary col-md-12" href="{{route('cms.newSubCategory')}}">Nieuwe sub-categorie</a>
                    </div>
                </div>





            </div>

        </div>
    </div>
@endsection




