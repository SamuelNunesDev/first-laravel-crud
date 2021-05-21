<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('.\css\bootstrap.min.css') }}">
    <title>Funcionario</title>
</head>
<body>
<form action="{{ route('employers.store') }}" method="post">
    @csrf
    <br/>
    <label for="" class="form-label">Nome do Funcionario</label>
    <input type="text" class="form-control" name="nome">
    <br/>
    <label for="" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control"  name="data_nascimento">
    <br/>
    <label for="" class="form-label">Status (0 ou 1)</label>
    <input type="number" class="form-control" name="status">
    <br/>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</body>
</html>
