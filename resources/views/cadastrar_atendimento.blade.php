<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro</title>


    <link href="/css/bootstrap.css" rel="stylesheet">


</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de atendimentos') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('salvar_atendimento') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="client_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do cliente') }}</label>

                            <div class="col-md-6">
                                <input id="client_name" type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" value="{{ old('client_name') }}" required autocomplete="name" autofocus>

                                @error('client_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="observation" class="col-md-4 col-form-label text-md-right">{{ __('Observação') }}</label>

                            <div class="col-md-6">
                                <input id="observation" type="text" class="form-control @error('observation') is-invalid @enderror" name="observation" value="{{ old('observation') }}" required autocomplete="name" autofocus>

                                @error('observation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="execution_date" class="col-md-4 col-form-label text-md-right">{{ __('Data de Execução') }}</label>

                            <div class="col-md-6">
                                <input id="execution_date" type="date" class="form-control @error('execution_date') is-invalid @enderror" name="execution_date" value="{{ old('execution_date') }}" required autocomplete="name" autofocus>

                                @error('execution_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_tipo_atendimento" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Atendimento') }}</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="id_tipo_atendimento" id="id_tipo_atendimento">
                                    @foreach($tipos as $tipo)
                                    <option value='{{$tipo->id}}'>{{$tipo->name}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                @error('id_tipo_atendimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
