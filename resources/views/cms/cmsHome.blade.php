@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-eq-height">

                <div class="container">
                    <h2>CMS Home</h2>
                    <hr>
                </div>

                <div class="panel panel-default">
                    <div style="margin-top: 100px; margin-bottom: 100px" class="panel-body">

                        <div class="container col-md-4 ">
                            <a href="cms/producten" class="btn btn-primary "style="width: 100%; font-size: large">Producten</a>
                        </div>
                        <div class="container col-md-4 ">
                            <a href="cms/categorieën" class="btn btn-primary "style="width: 100%; font-size: large">Categorieën</a>
                        </div>
                        <div class="container col-md-4 ">
                            <a class="btn btn-primary" style="width: 100%; font-size: large">Orders</a>
                        </div>



                    </div>

                </div>


        </div>
    </div>
@endsection

