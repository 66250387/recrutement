@extends('layout')

@section('content')
    <div class="clearfix"></div>
    <input type="hidden" id="is_dashboard_page" value=" "><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-pages-breadcrumb"  style="background: rgba(0, 0, 0, 0.6) url({{asset('img/arton.jpg')}}) 0 0 no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-attachment:scroll;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                    <div class="n-breadcrumb-info">
                                        <h1>inscription</h1><p>Inscrivez-vous maintenant dans notre système.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="n-job-pages-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-lg-offset-3">
                                    <div class="row">
                                        <div class="n-job-pages register-page">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="n-page-left-side">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="post-job-heading">
                                                                <h2>inscription de l'entreprise</h2>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="{{route('inscrientreprise.store')}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Nom de l'entreprise</label>
                                                                    <input class="form-control" type="text" name="nom" value="{{old('nom')}}"/>
                                                                    @error('nom')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>domaine:</label>
                                                                    <input class="form-control" type="text" name="domaine" value="{{old('domaine')}}"/>
                                                                    @error('domaine')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>ville:</label>
                                                                    <input class="form-control" type="text" name="ville" value="{{old('ville')}}"/>
                                                                    @error('ville')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>Website:</label>
                                                                        <input placeholder="https://www.example.com" class="form-control" type="text" name="siteweb" value="{{old('siteweb')}}"/>
                                                                        @error('siteweb')
                                                                        <font color="red">{{$message}}</font>
                                                                        @enderror
                                                                    </div>
                                                                <div class="form-group">
                                                                    <label>description:</label>
                                                                    {{-- <textarea   name="description" value="{{old('description')}}" /> --}}
                                                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                                    @error('description')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>Logo:</label>
                                                                        <input class="form-control" type="file" name="logo"/>
                                                                        @error('logo')
                                                                      <font color="red">{{$message}}</font>
                                                                        @enderror
                                                                    </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>E-mail:</label>
                                                                    <input class="form-control" type="email" name="email" value="{{old('email')}}"/>
                                                                    @error('email')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Password</label>
                                                                    <input class="form-control" type="password" name="password" value="{{old('password')}}"/>
                                                                    @error('password')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Confirm Password</label>
                                                                    <input class="form-control" type="password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                                                                    @error('password_confirmation')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>



                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <div class="buttons-area">

                                                                    <div class="form-group">
                                                                        <input type="checkbox" name="confirm" class="input-icheck-others"/>
                                                                        <p> Je suis d'accord <a href="#" target="_blank">termes et conditions.</a></p>
                                                                    </div>
                                                                    <button class="btn n-btn-flat btn-mid pull-right " type="submit">inscription</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section></div></div></div></div>
@endsection
