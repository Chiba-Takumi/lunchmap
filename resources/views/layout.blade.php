<!--見た目デザイン・ブーストラップ-->
<!--共通テンプレート-->
<!DOCTYPE html>
<html lang='ja'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
        <title>Lunchmap</title>
        <script src='{{ asset("js/app.js") }}' defer></script>

        <style>
        body {
              background: url("{{ asset('/assets/images/lunch.jpeg') }}");

            }
            .lead {
                z-index: 9;
                font-family: "YuGothic M";
                src: local("Yu Gothic Medium"),
                     local("Yu Gothic");
                color: white;
                font-weight: bold;
                font-size: 55px;
                position: absolute;/*絶対配置*/
                text-align:center;
                margin: 60px 0px 0px 0px;
              }

            h5 {
                  background: #ffffff;/*背景色*/
                  padding: 5px;/*文字まわり（上下左右）の余白*/
                  border: solid 3px #f2f777;/*線色*/
                  border-radius: 0.5em;/*角丸*/
            }

            .index{
                  background: #ffffff;/*背景色*/
                  padding: 10px;/*文字まわり（上下左右）の余白*/
                  border: solid 3px #ffff;/*線色*/
                  border-radius: 0.5em;/*角丸*/
            }

            .jumbotron{
                padding: 15px;
                border: solid #ffe788;
            }

            .nise {
              min-width: 10px;
              text-align: center;
              background-color: #ffff5e;
              font-size: 18px;
              color: #000000;
              text-decoration: none;
              font-weight: bold;
              padding: 10px 5px 5px 10px;
              position: relative;
              transition: .9s;
              border: 1px solid #FFF;
              border-radius: 0.5em;/*角丸*/
            }

            .sort {
                min-width: 10px;
                text-align: center;
                background-color: #ffff5e;
                font-size: 18px;
                color: #000000;
                text-decoration: none;
                font-weight: bold;
                padding: 10px 5px 5px 10px;
                position: relative;
                transition: .9s;
                border: 1px solid #FFF;
                border-radius: 0.5em;/*角丸*/
              }

              .sort.desc:after {
                content:"▼";
              }
              .sort.asc:after {
                content:"▲";
              }
        </style>

        <style type="text/css">

              #photo {
                  width: 10000;
                  height: 255px;
                  overflow: hidden;
                  position: relative;
              }

              #photo img {
                  top: 0;
                  position: relative;
              }
            }
        </style>
    </head>
    <body>
      <!--navvar-->
        <nav class='navbar navbar-expand-md navbar-dark fixed-top' style="background-color:#000000;">
            <a class='navbar-brand' href={{route('shop.list')}}>ランチマップ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        </nav>
        <!--navvar終わり-->

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

        <div class='container'>
            <p class='lead'>Lunchmap App</p>
          <div id="photo">
              <img class="img-responsive center-block" src="{{ asset('/assets/images/lunchtopjpg.jpg') }}">
          </div>
            @yield('content')
        </div>
    </body>
</html>
