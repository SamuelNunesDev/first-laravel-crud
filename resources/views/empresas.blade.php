<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('.\css\bootstrap.min.css') }}">
    <style>
        #titulo {
            margin-top: 20px;
            text-align :left;
            color: #e86803;
            font-family: "Open Sans";
            font-size: xxx-large;
            font-weight: bolder;
        }
        body {
            background-color: rgba(18, 18, 18);
        }

        td, th, tr, form {
            text-align: center;
        }
        table {
            background-color: rgba(255, 255, 255, 0.91);
            font-size: .8rem;
        }
        #subtitulo{
            color: white;
            font-size: large;

        }
        #btCriar, #tables, #subtitulo {
            width: auto;
            margin-top: 38px;
            margin-right: 10px;
            margin-bottom: 25px;
            margin-left: 35px;
        }

    </style>
    <title>Empresas</title>
</head>
<body>
<div class="container" id="row">
    <div class="btn-group">
        <th scope="col"><label id="titulo">CRUD</label></th>
        <th scope="col">
            <form action="{{ route('companys.create') }}" method="post">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-primary" id="btCriar">+Nova Empresa</button>
            </form>
        </th>
        <th> <label id="subtitulo">Selecione uma tabela: </label> </th>
        <th>
            <div class="btn-group btn-group-toggle" data-toggle="buttons" id="tables">
                <form method="post" action="{{ route('bonds.option') }}">
                    @csrf
                    <label class="btn btn-secondary active">
                        <input type="radio" name="op" value="bonds"> Vinculos
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="op" value="employers"> Funcionarios
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="op" value="positions"> Cargos
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="op" value="companys" checked> Empresas
                    </label>
                    <button type="submit" class="btn btn-success"> OK</button>
                </form>
            </div>
        </th>
        </tr>
        <br/>
    </div>
    <br/><br/>
    <table class="table table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Status</th>
            <th scope="col">Cadastrado em</th>
            <th scope="col">Atualizado em</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>
        @foreach($empresas as $empresa)
            <tr>
                <th scope="row">{{ $empresa->empresa_id }}</th>
                <td>{{ $empresa->nome }}</td>
                <td>{{ $empresa->status }}</td>
                <td> {{ date('d/m/Y H:i', strtotime($empresa->created_at)) }}</td>
                <td> {{ date('d/m/Y H:i', strtotime($empresa->updated_at)) }}</td>
                <td>
                    <form method="post" action="{{ route('companys.edit',
                                                   ['company' => ($empresa->empresa_id)]) }}">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="{{ route('companys.destroy',
                                                   ['company' => ($empresa->empresa_id)]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
