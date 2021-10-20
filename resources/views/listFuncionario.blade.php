<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Info Funcionario</title>
</head>
<body>
<p>ID Funcionario: {{ $funcionario->funcionario_id }}</p>
<p>Nome: {{ $funcionario->nome }}</p>
<p>Data de Nascimento: {{ date('d/m/Y', strtotime($funcionario->data_nascimento)) }}</p>
<p>Status do Funcionário: {{ $funcionario->status }}</p>
<p>Cadastrado em: {{ $funcionario->created_at }}</p>
<p>Atualizado em: {{ $funcionario->updated_at }}</p>
</body>
</html>
