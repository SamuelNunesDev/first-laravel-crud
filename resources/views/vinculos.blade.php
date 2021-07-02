<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Vinculos</title>
</head>
<body>
<div class="container" id="row">
    <div class="btn-group">
        <th scope="col"><label id="titulo">CRUD</label></th>
        <th scope="col">
            <form action="{{ route('bonds.create') }}" method="post">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-primary" id="btCriar">Criar Novo Vinculo</button>
            </form>
        </th>
        <th> <label id="subtitulo">Selecione uma tabela: </label> </th>
        <th>
            <div class="btn-group btn-group-toggle" data-toggle="buttons" id="tables">
                <form method="post" action="{{ route('bonds.option') }}">
                    @csrf
                    <label class="btn btn-secondary active">
                        <input type="radio" name="op" value="bonds" checked> Vinculos
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="op" value="employers"> Funcionarios
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="op" value="positions"> Cargos
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="op" value="companys"> Empresas
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
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Cargo</th>
            <th scope="col">Empresa</th>
            <th scope="col">Status</th>
            <th scope="col">Cadastrado em</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($vinculos))
            @foreach($vinculos as $vinculo)
                <tr>
                    <th scope="row">{{ $vinculo->vinculo_id }}</th>
                    <td>{{ $funcionarios[$vinculo->funcionario_id]->nome }}</td>
                    <td>{{ date('d/m/Y', strtotime($funcionarios[$vinculo->funcionario_id]->data_nascimento)) }}</td>
                    <td>{{ $cargos[$vinculo->cargo_id]->nome }}</td>
                    <td>{{ $empresas[$vinculo->empresa_id]->nome }}</td>
                    <td>{{ $vinculo->status }}</td>
                    <td> {{ date('d/m/Y H:i', strtotime($created_at[$vinculo->vinculo_id])) }}</td>
                    <td>
                        <form method="post" action="{{ route('bonds.edit', ['bond' => ($vinculo->vinculo_id)]) }}">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ route('bonds.destroy', ['bond' => ($vinculo->vinculo_id)]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
</body>
</html>
