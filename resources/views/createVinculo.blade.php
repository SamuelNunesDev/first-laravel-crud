<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('.\css\bootstrap.min.css') }}">
    <title>Criar Vinculo</title>
</head>
<body>
    <form action="{{ route('bonds.store') }}" method="post">
        @csrf
        <br/>
        <label for="" class="form-label">ID do Funcionario</label>
        <input type="number" class="form-control" name="funcionario_id">
        <br/>
        <label for="" class="form-label">ID do Cargo</label>
        <input type="number" class="form-control"  name="cargo_id">
        <br/>
        <label for="" class="form-label">ID da Empresa</label>
        <input type="number" class="form-control" name="empresa_id">
        <br/>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</body>
</html>
