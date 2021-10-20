<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('.\css\bootstrap.min.css') }}">
    <title>Atualizar Funcionario</title>
</head>
<body>
<form action="{{ route('employers.update', ['employer' => $funcionario->funcionario_id]) }}" method="post">
    @csrf
    @method('PUT')
    <br/>
    <label for="" class="form-label">Nome do Funcionario</label>
    <input type="text" class="form-control" name="nome" placeholder="{{ $funcionario->nome }}">
    <br/>
    <label for="" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control"  name="data_nascimento" placeholder="{{ $funcionario->data_nascimento }}">
    <br/>
    <label for="" class="form-label">Status</label>
    <input type="number" class="form-control" name="status" placeholder="{{ $funcionario->status }}">
    <br/>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

</body>
</html>
