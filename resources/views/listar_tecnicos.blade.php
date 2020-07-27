<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">

<head>

  <title>Pitangueira</title>

  <link href="/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="/css/tabela.css" rel="stylesheet">

  <link href="/css/dataTables.css" rel="stylesheet">

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

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Técnicos</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>Ação</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   @foreach($tecnicos as $tecnico)  
                    <tr>
                      <td>{{$tecnico->name}}</td>
                      <td>Visualizar | Desativar | Excluir</td>
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