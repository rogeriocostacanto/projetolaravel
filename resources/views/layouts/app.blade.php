<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta Barra do governo-->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/103859">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!--style Barra do governo-->
    <style>.quickbutton-separator{width:100%;border-bottom:1px solid #e5e5e5;margin-top:5px;margin-bottom:5px}.quickbutton-heading{font-weight:bold;text-transform:uppercase;color:#555;padding:0;margin-top:5px;margin-bottom:5px;border-bottom:2px solid #337ab7}.quickbutton .btn{height:65px;;margin-bottom:5px}.quickbutton .btn-block+.btn-block{margin-top:0px}.quickbutton .btn img{max-height:100%;top:0;bottom:0;left:0;right:0;position:absolute;margin:auto;padding:2px}@media (max-width:767px){.quickbutton .row{margin-left:0;margin-right:0}}#barra-brasil div,#barra-brasil a,#barra-brasil ul,#barra-brasil li{margin:0;padding:0;font-size:100%;font-family:inherit;vertical-align:baseline}#barra-brasil ul{list-style:none}@font-face{font-family:"Open Sans";font-style:normal;font-weight:700;src:local("Open Sans Bold"),local("OpenSans-Bold")}#barra-brasil{height:32px;background:#f1f1f1;font-weight:bold;font-size:12px;line-height:32px;font-family:"Open Sans",Arial,Helvetica,sans-serif;border-bottom:1px solid #dfdfdf;box-sizing:content-box}#barra-brasil a{text-decoration:none}body.contraste #barra-brasil{background:#000 !important}div#wrapper-barra-brasil{position:relative;overflow:hidden;margin:0 auto;width:100%;max-width:960px;height:100%}#barra-brasil .brasil-flag{float:left;padding:7px 0 6px;width:115px;height:19px;border-right:2px solid #dfdfdf}#barra-brasil .brasil-flag .link-barra{display:block;padding-left:42px;width:43px;background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIxOSIgdmlld0JveD0iMCAwIDEwMDAwMCA3MDAwMCI+PHBhdGggZmlsbD0iIzAwOTIzRiIgZD0iTTAgMGgxMDAwMDB2NzAwMDBIMHoiLz48cGF0aCBmaWxsPSIjRjhDMzAwIiBkPSJNNTAwMDAgODUwMEw4NTAwIDM1MDAwbDQxNTAwIDI2NTAwIDQxNTAwLTI2NTAwTDUwMDAwIDg1MDB6Ii8+PGNpcmNsZSBmaWxsPSIjMjgxNjZGIiBjeD0iNDk5NjMiIGN5PSIzNTAwMCIgcj0iMTc0NjQiLz48cGF0aCBmaWxsPSIjRkZGIiBkPSJNMzk1MzcgMjk2MDVjMTAzODggMCAxOTkxMSAzODIxIDI3MjM4IDEwMTI3IDI0Mi04NTAgNDIxLTE3MjYgNTMyLTI2MjItNzU5Ny02MTYyLTE3MjY1LTk4NjItMjc3NzAtOTg2Mi0xODIxIDAtMzYxNyAxMTQtNTM4MiAzMzAtMzc3IDgwNS02OTUgMTY0Mi05NDggMjUwNyAyMDY1LTMxNiA0MTc5LTQ4MCA2MzMwLTQ4MHoiLz48L3N2Zz4K") 8px center no-repeat;text-transform:uppercase;line-height:19px}#barra-brasil .acesso-info{position:absolute;left:130px}#barra-brasil .list{position:absolute;top:0;right:0}#barra-brasil .list .first{border-left:2px solid #dfdfdf}#barra-brasil .list-item{display:inline-block;height:32px;line-height:32px;border-right:2px solid #dfdfdf}#barra-brasil .list-item a{padding:8px 15px 8px 13px}#barra-brasil .link-barra{color:#606060}body.contraste #barra-brasil .link-barra{color:#FF0 !important;text-decoration:underline}#menu-icon{position:absolute;top:3px;border-top:15px double #606060;border-bottom:5px solid #606060;display:none;width:20px;right:5px}@media only screen and (max-width:959px){#barra-brasil #menu-icon{display:inline-block;padding:5px 3px 0px 3px}#barra-brasil .list .first{border-left:1px solid #dfdfdf}#barra-brasil nav:hover #menu-icon,#barra-brasil nav:active #menu-icon,#barra-brasil nav:focus #menu-icon{background-color:#DDD}body.contraste #barra-brasil nav:hover #menu-icon,body.contraste #barra-brasil nav:active #menu-icon,body.contraste #barra-brasil nav:focus #menu-icon{background-color:#606060 !important}#barra-brasil ul.list,#barra-brasil ul.list:active,#barra-brasil ul.list:focus{overflow:hidden;height:0px;transition:0.3s;padding-top:32px;width:auto;position:absolute;z-index:9}#barra-brasil .list-item{display:block;text-align:center;height:30px;background:#EEE;border:1px solid #dfdfdf}#barra-brasil .list-item a{padding:8px 30px 8px 28px}body.contraste #barra-brasil .list-item{background:#000 !important}body.contraste #menu-icon{border-top:15px double #fff !important;border-bottom:5px solid #fff !important}#barra-brasil .list a:active li,#barra-brasil .list a:focus li,#barra-brasil .list a:hover li{background:#DDD}body.contraste #barra-brasil .list a:active li,body.contraste #barra-brasil .list a:focus li,body.contraste #barra-brasil .list a:hover li{background:#606060 !important}#barra-brasil nav:active ul.list,#barra-brasil nav:focus ul.list,#barra-brasil nav:hover ul.list{height:150px;transition:0.5s}div#wrapper-barra-brasil{overflow:visible}}@media screen and (min-width:960px){#wrapper-barra-brasil{width:960px}}@media print{#barra-brasil .list{display:none}#barra-brasil .acesso-info .link-barra:after{content:" - Barra GovBr"}} 
    
    </style>    
    
</head>
<body>
<!--Barra do governo-->
<style>#barra-brasil #brasil-vlibras .link-vlibras{display:inline-table !important}</style>
    <div id="barra-brasil">
        <div id="wrapper-barra-brasil">
            <div class="brasil-flag">
                <a href="http://brasil.gov.br" class="link-barra">Brasil</a>
            </div><span class="acesso-info">
                <a href="http://brasil.gov.br/barra#acesso-informacao" class="link-barra">Acesso à informação</a></span>
                <nav><ul class="list"><li><a href="#" id="menu-icon"></a>
                </li><li class="list-item first"><a href="http://brasil.gov.br/barra#participe" class="link-barra">Participe</a>
                </li><li class="list-item"><a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil" class="link-barra" id="barra-brasil-orgao">Serviços</a>
                </li><li class="list-item"><a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legislação</a>
                </li><li class="list-item last last-item"><a href="http://brasil.gov.br/barra#orgaos-atuacao-canais" class="link-barra">Canais</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--fim Barra do governo-->
    <div id="app">    
        <nav class="navbar navbar-expand-md navbar-light text-black shadow-sm" style="background-color: #67a8cd; ">
            <div class="container">               
                <a class="navbar-brand "  href="{{ url('/') }}">
                    Banco de Idéias para projetos
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item">
                        <a  class="nav-link" href="#" ><i class="fa fa-th"></i> Home</a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link" href="#" ><i class="fa fa-lightbulb-o"></i> Idéias</a>
                        </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

   
   
    <!-- Footer-->
    <footer class="bg-light text-center text-white" >
    <!-- Grid container -->

    <div class="container p-4 pb-0" >
    <!-- Section: Social media -->
    
    <section class="mb-4 " >
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fa fa-facebook-f fa-lg"></i></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fa fa-google"></i></a>      

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fa fa-linkedin"></i
      ></a>     
    
  </div>
  <!-- Grid container -->
   

  <!-- Copyright -->
  <div class="text-center p-3 text-black shadow-sm" style="background-color: #67a8cd;">      
      © 2022 Copyright: Rogério Canto - rogerio.canto@ifmg.edu.br
  </div>
    <!-- Copyright -->
</footer>
    


    
</body>
</html>
