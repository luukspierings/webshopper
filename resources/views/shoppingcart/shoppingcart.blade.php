@extends('layouts.app')

@section('content')
    <div class="container table-responsive page-wrap ">
        <div class="tablewrapper">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>Verwijder</th>
                                <th>Naam</th>
                                <th>Prijs</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php $i=0 ?>
                        @foreach($list as $product)
                        <tr>
                            <td>
                            <form method="POST" action="{{URL::action('ShoppingcartController@PostShoppingcart')}} ">
                                <input name="_method" type="hidden" value="PATCH">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <input type="hidden" name="product" value="{{$i}}"/>
                                <input type="hidden" name="method" value=0/>
                                <input type="submit" name="submit" value="X">
                            </form>
                            </td>
                            <td>{{$product->name}}</td>
                            <td>€ {{$product->price}}</td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="col-md-12">
                    <h3 class="totalprice">Totaalprijs: € {{$totalprice}}</h3>
                </div>



                <div class="col-md-12">
                    <a href="{{ url('/') }}" class="btn btnshoppingcart pull-left">Verder winkelen</a>
                    <form method="POST" action="{{URL::action('PagesController@PostShoppingcart')}} ">
                        <input name="_method" type="hidden" value="PATCH">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="method" value=0/>
                        <input class="btnshoppingcart pull-right" type="submit" name="submit" value="Betalen">
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
