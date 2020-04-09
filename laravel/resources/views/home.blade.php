


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


        <title>DSS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 100px;
            }

            a {

            }
            line{
             background: url('{{ asset('img/line.png') }}') repeat no-repeat bottom;
                line-height: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
 <!--            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->
                <div class="top-right links">

             @if (session()->has('user_id'))
                        <a href="{{ url('/') }}"> Hello {{ session()->get('user_name', 'default') }} </a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                @endif                
            </div>

 
            <div class="content">
                <div class="title m-b-md">
                    決策支援系統 
                    <br><p style="font-size: 42px;margin-top: -5px">Decision Support System</p>
                </div>

                <div class="links">

<div id="app">
    <v-app>

      <v-content>
        <example></example>
      </v-content>
    </v-app>
  </div>
<script src=”{{ asset('js/app.js') }}” defer></script>
            @if (session()->has('user_id'))
                <a href="{{ url('/GrowthStrategy') }}" style="font-size:25px; font-family: 'Raleway', sans-serif; font-weight: 50;">
                    <line>開始 GO</line>
                </a>
        <!--     <button type="button" class="btn btn-outline-secondary" style="font-size:22px; font-family: 'Raleway', sans-serif; font-weight: 50;" onclick="location.href='{{ url('/GrowthStrategy') }}'">開始</button> -->


            @else 
                <a href="{{ route('login') }}" style="font-size:25px; font-family: 'Raleway', sans-serif; font-weight: 50;">
                    <line>登入</line>
                </a>                       
            @endif
                </div>

            </div>
        </div>
<script type='text/javascript'>
document.createElement("line")
</script>
    </body>
</html>

