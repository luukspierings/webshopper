@extends('layouts.app')

@section('content')
    <div class="container page-wrap">
        <div class="row" >
            <div class="col-md-10 col-md-offset-1 welkomWrapper">
                <div class="row " >
                    <div class="col-lg-12 col-md-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/1000x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                        <a class="thumbnail" href="{{ url('/shop/1') }}">
                            <img class="img-responsive" src="images/woman.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                        <a class="thumbnail" href="{{ url('/shop/2') }}">
                            <img class="img-responsive" src="images/man.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
