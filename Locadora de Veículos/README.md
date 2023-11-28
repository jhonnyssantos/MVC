# CRUD-MVC-PHP
Crud em MVC e PHP
### Objetivo: 

>Desenvolver um sistema CRUD simples em PHP 5 ou 7 (sem frameworks) e MySQL para a administração de uma locadora de veículos.

### Detalhes:

>Os clientes devem informar os seguintes dados:

1. Nome
2. Email
3. Telefone
4. Endereço
5. Flag para livro ativo/inativo (não afetando na listagem, somente um valor para referência)


>Os veículos devem conter as seguintes informações:

1. Marca
2. Modelo
3. Ano
6. Cor
4. Preço 
5. Flag para livro ativo/inativo (não afetando na listagem, somente um valor para referência)


### Regras: 

>As regras abaixo devem ser seguidas ao cadastrar/editar um cliente ou veículo:

1. Não devem haver clientes ou veículos com o mesmo nome.
2. As infmações ano, preço, telefone e endereço não podem ser zerados nem negativos.

### Detalhes sobre o programa:

1.  init.php são os arquivos de configurações do sistema de locadora
2.  diretório "view" é onde fica todas as telas do sistema
3.  diretório "controller" é onde fica fica as funcionalidades do sistema que interragem com o banco de dados
4.  diretório "model" é onde fica os arquivos de conexão com o banco de dados

No diretório "view" existem 3 páginas principais: editar.php, cadastro.php e index.php. a página head e menu são os escopos do HTML e Menu do sistemas respectivamente.

No diretório "controller" estão os arquivos PHP que executam as funcionalidades do sistema.

No diretório "model" estão os arquivos de conexão com o Banco de Dados

O arquivo Codigo SQL.sql é o scrip em sql que cria o banco e a tabela.
