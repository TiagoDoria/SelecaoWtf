<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">

<head>

  <title>Pitangueira</title>

  <link href="/css/all.css" rel="stylesheet" type="text/css">

  <link href="/css/tabela.css" rel="stylesheet">

  <link href="/css/dataTables.css" rel="stylesheet">
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
  <br><br><br>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tipos de Atendimento</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Status</th>
                      <th>Ação</th>
                      <!-- <th>Ação</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>Status</th>
                      <th>Ação</th>
                      <!-- <th>Ação</th> -->
                    </tr>
                  </tfoot>
                  <tbody>
                   @foreach($tipos as $tipo)  
                    <tr>
                      <td>{{$tipo->name}}</td>
                      @if($tipo->status==1)
                      <td>Ativo</td>
                      @else
                      <td>Inativo</td>
                      @endif
                      @if($tipo->status==1)
                      <td><a href="{{ route('consultar_tipo_atendimento',$tipo->id) }}">Consultar</a> | <a href="{{ route('desativar_tipo_atendimento',$tipo->id) }}">Desativar</a> | <a href="{{ route('deletar_tipo_atendimento',$tipo->id) }}">Excluir</a></td>
                      @else
                      <td><a href="{{ route('consultar_tipo_atendimento',$tipo->id) }}">Consultar</a> | <a href="{{ route('ativar_tipo_atendimento',$tipo->id) }}">Ativar</a> | <a href="{{ route('deletar_tipo_atendimento',$tipo->id) }}">Excluir</a></td>
                      @endif
                    </tr>       
                    @endforeach        
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
  <script src="vendor/jquery/jquery.js"></script>
  <script src="/js/jquery.dataTables.js"></script>
  <script src="/js/dataTables.bootstrap4.js"></script>
  <script src="/js/demo/datatables-demo.js"></script>

</body>



</html>