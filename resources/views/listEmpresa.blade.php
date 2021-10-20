<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Info Empresa</title>
</head>
<body>
<p>ID Empresa: {{ $empresa->empresa__id }}</p>
<p>Nome: {{ $empresa->nome }}</p>
<p>Status do Cargo: {{ $empresa->status }}</p>
<p>Cadastrado em: {{ $empresa->created_at }}</p>
<p>Atualizado em: {{ $empresa->updated_at }}</p>
</body>
</html>
