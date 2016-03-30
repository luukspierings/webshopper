

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

                    @foreach($categories as $category)
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="content">
                                    <?php echo $category->name ?>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-6">

                    <h3>Sub-categorieën</h3>

                    @foreach($categories as $category)
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="content">
                                    <?php echo $category->name ?>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>



            </div>

        </div>
    </div>
@endsection




