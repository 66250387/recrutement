<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' id='bootstrap-theme-css'  href='{{asset('css/bootstrap.min7404.css?ver=5.9.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-css'  href='{{asset('css/mega_menu.min7404.css?ver=5.9.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='{{asset('css/font-awesome.min7404.css?ver=5.9.3')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jobListing-theme-slug-fonts-css'  href='https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSans+Serif:400,500,700%7CQuicksand:400,500,700&amp;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='jobListing-theme-style-css'  href='{{asset('css/theme7404.css?ver=5.9.3')}}' type='text/css' media='all' />

</head>
<body class="home page-template page-template-page-home page-template-page-home-php page page-id-202 theme-jobListing woocommerce-no-js wpb-js-composer js-comp-ver-6.8.0 vc_responsive">
<nav id="menu-1" class="mega-menu mega-menu fa-change-black">
    <section class="menu-list-items">
        <div class="container">        <ul class="menu-logo">
                <li><a href="/"><img src="{{asset('img/logo2.jpg')}}" class="img-responsive" alt="logo" width="50px" height="50px"></a>
                </li>
            </ul>
            <ul class="menu-button">
               
                    <li class="n-login-header"></li>
               @guest
                   @if (Route::has('inscription.store'))
                   <li><a href="/inscription" class="n-login-header"><i class="fa fa-user-plus"></i>inscription Etudiant</a></li>
                   @endif
                   @if (Route::has('inscrientreprise.store'))
                   <li><a href="/formentreprise" class="n-login-header"><i class="fa fa-user-plus"></i>inscription Entreprise</a></li>
                   @endif

                      
                   @else
                   <li><a href="/logout" class="n-login-header"><i class="fa fa-sign-in"></i>se deconnecter</a></li>
 
               @endguest
               
            </ul>

        </div>
    </section>
</nav>



@yield('content')

</div>
</div>
</section></div></div></div></div>
</div>
</div>
</div>


@if(session('message'))
    <script>alert('{{session('message')}}')</script>
@endif
</body>
</html>
