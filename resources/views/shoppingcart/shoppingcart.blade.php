@extends('layouts.app')

@section('content')
    <div class="container table-responsive page-wrap ">
        <div class="tablewrapper">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Naam</th>
                                <th>Hoeveelheid</th>
                                <th>Prijs</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $product)
                        <tr>
                            <td><button>X</button></td>
                            <td>{{$product->name}}</td>
                            <td>1</td>
                            <td>€ {{$product->price}}</td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="col-md-12">
                    <h3 class="totalprice">Totaalprijs: €69,69</h3>
                </div>



                <div class="col-md-12">
                    <button class="btnshoppingcart pull-left" type="submit" value="Submit"/>Verder winkelen</button>
                    <button class="btnshoppingcart pull-right" type="submit" value="Submit"/>Naar betalen</button>
                </div>

            </div>
        </div>
    </div>
@endsection
