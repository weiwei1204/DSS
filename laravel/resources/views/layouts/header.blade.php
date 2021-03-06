<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('js/Chart.js') }}" rel="stylesheet">
        <link href="{{ asset('js/Chart.min.js') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/rita_style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
     <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
     <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>




<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
 -->
  


    <link href="{{ asset('css/rita_style.css') }}" rel="stylesheet">

    <style type="text/css">
        #loading {
          
        

        }

    </style>
</head>



<body>
    <div id="app">
<!--         <spinner></spinner>
 -->        <nav class="navbar navbar-default navbar-fixed-top" style="position: fixed; height: 70px; line-height:100%">
            <div class="container" style="margin-top: -10px">
                <div class="navbar-header col-md-6" style="vertical-align: middle;">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        <div style="padding-bottom:50px ; display: inline; position: relative;bottom: 5px"><img src="{{ asset('img/house.png') }}" height="30" style="display: inline;"> </div>&nbsp;R&C
                    </a>
                </div>

                <div class="collapse navbar-collapse col-md-6" id="app-navbar-collapse" >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-top: -30px">
                        <!-- Authentication Links -->
                        @if (session()->has('user_id'))
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ session()->get('user_name', 'default') }}
                                  <!--    <span class="caret"></span> -->
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
<!--                             <spinner></spinner>
 -->
            </div>

        </nav>

        <div style="margin-top: 50px;background: #F4F5FA">@yield('content') </div>

         @if (Request::segment(2) == "Q10")
            @if($Chartbsc1!=null)
            {!! $Chartbsc1->script() !!}
            @endif
            @if($Chartbsc2!=null)
            {!! $Chartbsc2->script() !!}
            @endif
            @if($Chartbsc3!=null)
            {!! $Chartbsc3->script() !!}
            @endif
        @endif
        
    </div>
  <footer class="my-2 pt-2 text-muted text-center text-small">
    <p class="mb-1" >© 2020 wei</p>
  </footer>

</body>
       <script src="{{ asset('js/app.js') }}"></script>

</html>

