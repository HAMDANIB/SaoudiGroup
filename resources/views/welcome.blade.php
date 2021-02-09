<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('assets/css/Bootstrap.min.css') }}" rel="stylesheet" media="all">  

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <img src="{{ url('Assets/img/SGLOGO.png') }}" alt="no logo"> 
            
            <div class="title m-b-md">
            Saoudi Group
            </div>
            <div class="links">
                    <a href="{{url('/articles')}}">articles</a>
                    <a href="{{url('/index')}}">index</a>
                </div>

                <div class="card-deck"style="width: 70rem;">                
                  <div class="card">
                       <img class="card-img-top" src="{{ url('Assets/img/fournitures-de-bureau.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer">
                          Fournitures de bureau
                        </div>
                      </div> 

                      <div class="card">
                        <img class="card-img-top" src="{{ url('Assets/img/Vetement_industr.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                             <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer">
                         Vêtements industriels
                        </div>
                      </div>

                      <div class="card">
                        <img class="card-img-top" src="{{ url('Assets/img/quin1.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="/articles" class="stretched-link"></a>
                        </div>
                        <div class="card-footer">
                          Quincaillerie
                        </div>
                      </div>


                      <div class="card">
                        <img class="card-img-top" src="{{ url('Assets/img/electromenagers.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer">
                          Electroménager
                        </div>
                      </div>


                      <div class="card">
                        <img class="card-img-top" src="{{ url('Assets/img/construction.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer">
                          Construction
                        </div>
                      </div>
                     </div>

               

            </div>
        </div>
    </body>
</html>
