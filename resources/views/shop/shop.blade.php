@extends('layouts.app')

@section('content')
    <div class="container page-wrap">
        <div class="row">

            <div class="col-md-12 breadcrumb">
                <div class="container">
                    <a href="/">Home</a>
                    <span>&#62;</span>
                    <a href="/shop/{{$main->id}}"><?php echo $main->name ?></a>
                    @if($sub != 0)
                        <span>&#62;</span>
                        <a href="/shop/{{$main->id.'/'.$sub}}" ><?php foreach($categories as $cat){ if($sub == $cat->id){ echo $cat->name;}} ?></a>
                    @endif

                </div>

            </div>

            <!-- Filters -->
            <div class="col-md-2 filtercolumn">

                <form action="{{URL::current()}}">
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Zoeken" name='zoeken' value="{{\Illuminate\Support\Facades\Input::get('zoeken')}}">
                        <span class="input-group-btn">
                        <button class="btn btn-default">Zoeken</button>
                      </span>
                    </div><!-- /input-group -->
                </form>

                <br>
                <h3>Kleding</h3>
                <ul class="taxons-list filterlist">
                    @foreach($categories as $category)
                        <li><a class="filterlink" href="{{ URL::action('ShopController@getView', [$main, $category]) }}">{{$category->name}}</a></li>
                    @endforeach
                </ul>



                <br>

            </div>

            <!-- Producten -->
            <div class="col-md-10 productthumb nospacing">
                <h3 class="text-center">{{$main->name}}</h3>
                <h4 class="text-center"><?php foreach($categories as $cat){ if($sub == $cat->id){ echo $cat->name;}} ?></h4>
                <br>

                <div class="productgrid">
                    @foreach($products as $value)
                    <div class="col-lg-4 col-md-4 col-xs-4 nospacing">
                        <div class="product">
                            <a class="thumbnail" href="{{ URL::action('ProductdetailController@getIndex', $value->id) }}">
                                <img class="img-responsive" src="{{$value->imagesrcSmall}}" alt="">
                            </a>
                            <h3 class="text-center">{{$value->name}}</h3>
                            <h4 style="word-break: break-all" class="text-center">{{$value->shortDescription}}</h4>
                            <h3 class="text-center">€ {{$value->price}}</h3>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
