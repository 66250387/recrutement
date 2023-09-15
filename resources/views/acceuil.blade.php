@extends('layout')

@section('content')
    @include('partials._search')
 




    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-featured-jobs-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title left">
                                        <h2>listes des job</h2>
                                        <!-- <span class="view-more"><a href="# " class="btn n-btn-rounded"> View All </a></span> -->
                                    </div>
                                </div>
{{ Auth::user()->nom }}
    <div class="container">
        <div class="row">
       @foreach($postes as $poste)
       <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">{{ $poste->user->nom }}</h5>
          <p class="card-text">{{ $poste->description }}</p>
          <a href="#" class="btn btn-primary">postuler</a>
        </div>
      </div>
       @endforeach
        </div>
    </div>
@endsection
