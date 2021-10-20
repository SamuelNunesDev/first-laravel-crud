<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('.\css\bootstrap.min.css') }}">
    <title>Atualizar Empresa</title>
</head>
<body>
<form action="{{ route('companys.update', ['company' => $empresa->empresa_id]) }}" method="post">
    @csrf
    @method('PUT')
    <br/>
    <label for="" class="form-label">Nome da Empresa</label>
    <input type="text" class="form-control" name="nome" placeholder="{{ $empresa->nome }}">
    <br/>
    <label for="" class="form-label">Status</label>
    <input type="number" class="form-control" name="status" placeholder="{{ $empresa->status }}">
    <br/>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

</body>
</html>
