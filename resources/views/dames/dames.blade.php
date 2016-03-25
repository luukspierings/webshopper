@extends('layouts.app')

@section('content')
    <div class="container page-wrap">
        <div class="row">

            <!-- Filters -->
            <div class="col-md-2 filtercolumn">
                <h3>
                    <a class="groupfilterlink" data-toggle="collapse" href="#collapse1">Kleding</a>
                </h3>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul class="taxons-list list-group">
                        <li><a class="filterlink" href="#">Jassen</a></li>
                        <li><a class="filterlink" href="#">Broeken</a></li>
                        <li><a class="filterlink" href="#">Blouses</a></li>
                        <li><a class="filterlink" href="#">Truien</a></li>
                        <li><a class="filterlink" href="#">Sportkleding</a></li>
                        <li><a class="filterlink" href="#">T-shirts</a></li>
                    </ul>
                </div>

                <h3>
                    <a class="groupfilterlink" data-toggle="collapse" href="#collapse2">Merken</a>
                </h3>
                <div id="collapse2" class="panel-collapse collapse">
                    <ul class="taxons-list list-group">
                        <li><a class="filterlink" href="#">C&A</a></li>
                        <li><a class="filterlink" href="#">ESPRIT</a></li>
                        <li><a class="filterlink" href="#">MANGO</a></li>
                        <li><a class="filterlink" href="#">River Island</a></li>
                        <li><a class="filterlink" href="#">Steps</a></li>
                    </ul>
                </div>
            </div>

            <!-- Producten -->
            <div class="col-md-10">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
@endsection
