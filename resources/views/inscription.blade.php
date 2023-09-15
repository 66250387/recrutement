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
                                                                <h3>inscription</h3>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="{{route('inscription.store')}}">
                                                            @csrf
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Nom:</label>
                                                                    <input class="form-control" type="text" name="nom" value="{{old('name')}}"/>
                                                                    @error('name')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Prenom:</label>
                                                                    <input class="form-control" type="text" name="prenom" value="{{old('prenom')}}"/>
                                                                    @error('prenom')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>filiere:</label>
                                                                    {{-- <input class="form-control" type="text" name="diplome" value="{{old('filiere')}}"/> --}}
                                                                    <select class="form-control" name="filiere" aria-label="Default select example">
                                                                      @foreach ($filieres as $filiere)
                                                                      <option value="{{ $filiere->id }}">{{ $filiere->option  }}</option>
                                                                      @endforeach
                                                                    </select>
                                                                    @error('filiere')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>diplome:</label>
                                                                    <select class="form-control" name="diplome" aria-label="Default select example">
                                                                        @foreach ($diplomes as $diplome)
                                                                        <option value="{{ $diplome->id }}">{{ $diplome->diplome  }}</option>
                                                                        @endforeach
                                                                      </select>
                                                                    @error('diplome')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>E-mail:</label>
                                                                    <input class="form-control" type="text" name="email" value="{{old('email')}}"/>
                                                                    @error('email')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>mot de passe</label>
                                                                    <input class="form-control" type="password" name="password" value="{{old('password')}}"/>
                                                                    @error('password')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Confirmer le mot de passe </label>
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
                                                                    <button class="btn n-btn-flat btn-mid pull-right " type="submit">insciption</button>
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
