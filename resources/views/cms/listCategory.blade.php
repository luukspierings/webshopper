

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-md-10 ">
                <div class="container">
                    <h2>CMS Categorieën</h2>
                    <hr>
                </div>

                <div class="col-md-6">

                    <h3>Categorieën</h3>

                    @foreach($categories['main'] as $category)
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="content col-md-12">
                                    <?php echo $category->name ?>
                                </div>
                                <br><br>
                                <div class="content">
                                    <a class="btn btn-warning col-md-5 ">Wijzigen</a>
                                </div>
                                <div class="content">
                                    <a class="btn btn-danger col-md-5 col-md-offset-2">Verwijderen</a>
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
                                    <?php echo $category->name ?>
                                </div>
                                <br><br>
                                <div class="content">
                                    <a class="btn btn-warning col-md-5 ">Wijzigen</a>
                                </div>
                                <div class="content">
                                    <a class="btn btn-danger col-md-5 col-md-offset-2">Verwijderen</a>
                                </div>

                            </div>
                        </div>
                    @endforeach


                    
                </div>



            </div>

        </div>
    </div>
@endsection




