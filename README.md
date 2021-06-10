# Primeiro CRUD feito utilizando o laravel.

## -> O software tem como objetivo criar, disponibilizar, atualizar ou excluir registros de 4 tabelas diferentes e seus respectivos modelos:

### 1. **Tabela Funcionários** 

#### A tabela funcionarios tem a finalidade de registrar funcionarios utilizando os campos abaixo:

* funcionario_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* data_nascimento -> tipo date, obrigatório.
* status -> tipo tinyint(1), obrigatório. *Utilizando 0 para falso e 1 para verdadeiro*
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

### 2. **Tabela Cargos** 

#### A tabela cargos tem finalidade registrar cargos utilizando os campos abaixo:

* cargo_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* status -> tipo tinyint(1), obrigatório. *Utilizando 0 para falso e 1 para verdadeiro*
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

### 3. **Tabela Empresas**

#### A tabela empresas tem finalidade de registrar empresas utilizando os campos abaixo:

* empresa_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* status -> tipo tinyint(1), obrigatório. *Utilizando 0 para falso e 1 para verdadeiro*
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

### 4. **Tabela Vinculos**

#### A tabela vinculos é uma tabela pivot que recebe atributos de cada uma das outras três tabelas (funcionarios, cargos e empresas). Logo abaixo temos os campos e o diagrama de entidade-relacionamento. 

* vinculo_id -> chave primária, auto incrementável, tipo bigint(20) unsigned, obrigatório.
* funcionario_id -> chave estrangeira, tipo bigint(20) unsigned, obrigatório.
* cargo_id -> chave estrangeira, tipo bigint(20) unsigned, obrigatório.
* empresa_id -> chave estrangeira, tipo bigint(20) unsigned, obrigatório.
* nome -> tipo varchar(50), obrigatório. 
* status -> tipo tinyint(1), obrigatório. *vinculos.status = funcionarios.status * cargos.status * empresas.status*
* created_at -> tipo timestamp.
* updated_at -> tipo timestamp.

![DiagramaER](https://raw.githubusercontent.com/SamuelNunesDev/first-laravel-CRUD/master/Diagrama%20ER.png)

### -> Cada tabela possui sua própria interface, compostas por views criadas utilizando as tecnologias HTML5, CSS3 e Bootstrap.

### -> Lista de futuras features para o projeto.

- [ ] Implementação de HTML5, CSS3, JavaScript e Bootstrap em todas as interfaces.
- [ ] Otimização do código criando arquivos secundários .CSS para as views.
- [ ] Otimização do código criando template para as views.
- [ ] Ajuste das arrays, de preferencia utilizar recursos do laravel para resolver.
- [ ] Implementação da licensa.
