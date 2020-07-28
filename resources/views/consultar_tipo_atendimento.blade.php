<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">

<head>

  <title>Pitangueira</title>

  <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">

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
  @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
  @endif
  <br><br>
  <!-- Page Wrapper -->
  <div class="container">
    <h2>Nome: </h2> {{$tipo->name}}
    <h2>Status: </h2>
    @if($tipo->status==1)
        Ativo
    @else
        Inativo
    @endif
   

  </div>
</body>



</html>