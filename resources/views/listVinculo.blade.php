<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Info</title>
</head>
<body>
<p>ID Vinculo: {{ $vinculo->vinculo_id }}</p>
<p>Status do Vinculo: {{ $vinculo->status }}</p>
<p>ID Funcionario: {{ $vinculo->funcionario_id }}</p>
<p>Nome: {{ $funcionario->nome }}</p>
<p>Data de Nascimento: {{ date('d/m/Y', strtotime($funcionario->data_nascimento)) }}</p>
<p>Status do Funcionário: {{ $funcionario->status }}</p>
<p>Cargo: {{ $cargo->nome }}</p>
<p>Status do Cargo: {{ $cargo->status }}</p>
<p>Empresa: {{ $empresa->nome }}</p>
<p>Status da Empresa: {{ $empresa->status }}</p>
</body>
</html>
