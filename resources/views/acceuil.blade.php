@extends('layout')

@section('content')
    @include('partials._search')


    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-featured-jobs-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title left">
                                        <h2>Latest Jobs</h2>
                                        <!-- <span class="view-more"><a href="# " class="btn n-btn-rounded"> View All </a></span> -->
                                    </div>
                                </div>
{{ Auth::user()->nom }}
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="n-features-job-two-box clear-custom" style="width: 100%;">


                <form method="post" action="{{route('page')}}" enctype="multipart/form-data">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; float:left;">
                    <div class="n-featured-single">
                        <div class="n-featured-single-top">
                            <div class="n-featured-singel-img">
                                <a href="acceuil/"><img src="img/logo2.jpg" class="img-responsive" alt="logo"></a>
                            </div>
                            <div class="n-featured-singel-meta">
                                <h4><a href=""></a></h4>

                                <p><i class="fa fa-map-marker"></i><a href=""> </a></p>
                                <div class="n-cat">...</div>

                            </div>

                        </div>
                        <div class="n-featured-single-bottom">
                            <center>
                                <span class="badge badge-info" style="font-size: 140%; padding: 5px; background-color: #17a2b8;">Tags: </span>  
                            </center>
                        </div>
                    </div>
                </div>

@endsection
