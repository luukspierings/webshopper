@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-eq-height">
            <div style="margin-bottom: 100px"  >
                <div class="container">
                    <h2>CMS Orders</h2>
                    <hr>
                </div>

                <div class="container">

                    @foreach($orders as $order)

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-10">
                                    <h3><?php foreach($users as $user){ if($user->id == $order->user_id){echo $user->email;}} ?></h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <form method="POST" action="{{route('cms.deleteOrder', ['order' => $order->id])}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-Danger col-md-12 ">Verwijderen</button>
                                    </form>
                                </div>

                                <br>

                                <div class="col-md-12">
                                    @foreach($productOrders as $po)
                                        @if($po->order_id == $order->id)
                                            <h4><?php foreach($products as $product){ if($product->id == $po->product_id){echo '- '.$product->name;}}?></h4>
                                        @endif

                                    @endforeach
                                </div>



                            </div>
                        </div>

                    @endforeach

                </div>

            </div>

        </div>
    </div>
@endsection

