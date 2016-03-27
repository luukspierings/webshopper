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
                        <tr>
                            <td><button>X</button></td>
                            <td>Broek</td>
                            <td>1</td>
                            <td>€9,69</td>
                        </tr>
                        <tr>
                            <td><button>X</button></td>
                            <td>Onderbroek</td>
                            <td>2</td>
                            <td>€48,69</td>
                        </tr>
                        <tr>
                            <td><button>X</button></td>
                            <td>Jas</td>
                            <td>2</td>
                            <td>€18,69</td>
                        </tr>
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
