<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Info Cargo</title>
</head>
<body>
<p>ID Cargo: {{ $cargo->cargo_id }}</p>
<p>Nome: {{ $cargo->nome }}</p>
<p>Status do Cargo: {{ $cargo->status }}</p>
<p>Cadastrado em: {{ $cargo->created_at }}</p>
<p>Atualizado em: {{ $cargo->updated_at }}</p>
</body>
</html>
