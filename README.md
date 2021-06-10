# Primeiro CRUD feito utilizando o laravel.

## -> O software tem como objetivo criar, disponibilizar, atualizar ou excluir registros de 4 tabelas diferentes, são elas:

### 1. **Tabela Funcionários** 

#### A tabela funcionarios tem a finalidade de registrar funcionarios utilizando os campos abaixo:

* funcionario_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* data_nascimento -> tipo date, obrigatório.
* status -> tipo tinyint(1), obrigatório.
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

### 1. **Tabela Cargos** 

#### A tabela cargos tem finalidade registrar cargos utilizando os campos abaixo:

* cargo_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* status -> tipo tinyint(1), obrigatório.
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

### 1. **Tabela Empresas**

#### A tabela empresas tem finalidade de registrar empresas utilizando os campos abaixo:

* empresa_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* status -> tipo tinyint(1), obrigatório.
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

### 1. **Tabela Vinculos**

#### A tabela vinculos é uma tabela pivot que recebe atributos de cada uma das outras três tabelas (funcionarios, cargos e empresas). Logo abaixo temos os campos e o diagrama de entidade-relacionamento. 

* vinculo_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* funcionario_id -> chave estrangeira, tipo bigint(20) unsigned, obrigatório.
* cargo_id -> chave estrangeira, tipo bigint(20) unsigned, obrigatório.
* empresa_id -> chave estrangeira, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* status -> tipo tinyint(1), obrigatório.
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

![DiagramaER](https://raw.githubusercontent.com/SamuelNunesDev/first-laravel-CRUD/master/Diagrama%20ER.png)
