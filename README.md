
<!doctype html>
<html lang="pt-br">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-     - Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<title>Home | 127.0.0.1:8000</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="#"><img src="https://dotlib.com/theme/img/logos/logo.png" alt=""></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active"
aria-current="page" href="http://127.0.0.1:8000">HOME</a>
</li>
<li class="nav-item">
<a class="nav-link "
href="http://127.0.0.1:8000/clientes">CLIENTES</a>
</li>
<li class="nav-item">
<a class="nav-link "
href="http://127.0.0.1:8000/produtos">PRODUTOS</a>
</li>
<li class="nav-item">
<a class="nav-link "
href="http://127.0.0.1:8000/pedidos">PEDIDOS</a>
</li>
</ul>

</div>
</div>
</nav>
<div class="row bg-light">
<div class="col">
<div class="container mt-4">

<h1>Aplicação</h1>
<hr>
<p>
Essa aplicação foi construida para o desafio Dot.lib e simula um sistema que gerencia pedidos,
clientes e produtos. Nessa aplicação é possível vizualizar, ordenar, editar e deletar qualquer
tupla de qualquer tabela do banco de dados referente ao desafio.
</p>

<h3> Nessa aplicação é possivel:</h3>
<h5>Clientes</h5>
<ul>
<li>Vizualizar todos os clientes</li>
<li>Vizualizar um cliente</li>
<li>Ordenar consultas por nome, email e CPF</li>
<li>Criar um cliente</li>
<li>Editar um cliente</li>
<li>Deletar um cliente</li>
</ul>
<h5>Produtos</h5>
<ul>
<li>Vizualizar todos os produtos</li>
<li>Vizualizar um produto</li>
<li>Ordenar consultas por nome, código de barras e preço</li>
<li>Criar um produto</li>
<li>Editar um produto</li>
<li>Deletar um produto</li>
</ul>
<h5>Pedidos</h5>
<ul>
<li>Vizualizar todos os pedidos</li>
<li>Vizualizar um pedido</li>
<li>Ordenar consultas por data, n° do pedido, cliente, produto, status e quantidade</li>
<li>Criar um pedido</li>
<li>Editar um pedido</li>
<li>Deletar um pedido</li>
</ul>
</div>

</div>
</div>
<div class="row ">
<div class="col">
<div class="container mt-4">
<h1>Backend</h1>
<hr>
<p>
O backend dessa aplicação foi feita em laravel 8, utilizando PSR's e padrões da projetos.
</p>

<h4> Requisitos para executar a aplicação:</h4>
<hr>
<ul>
<li>Servidor Apache (wamp, xampp ou qualquer um de sua preferência)</li>
<li>PHP >= 7.0</li>
<li>Composer</li>
<li>MySQL</li>
<li>NPM</li>
</ul>

<h3>Instalação do backend</h3>
<hr>
<p>
Primeiro faça o download do arquivo no repositório ou utilize o comando
git clone se estiver utilizando o GIT, dentro da pasta publica do seu servidor apache.
</p>
<p>
Dentro da raiz do projeto execute o comando composer install, assim ele criará a pasta
vendor com todas as dependências do projeto.
</p>
<p>
Em seguida crie um arquivo com nome ".env" (sem as aspas). Na raiz do projeto
existe um arquivo chamado .env.exemple, copie todo o conteúdo dentro dele e cole dentro
do arquivo .env que vc acabou de criar.
</p>
<p>
Depois disso vc abrirá o terminal na raiz do projeto e executará os seguintes comandos:
</p>
<ul>
<li>php artisan key:generate</li>
<li>php artisan config:clear</li>
<li>php artisan config:cache</li>
</ul>
<p>
Agora você precisa criar uma base de dados no MySQL, pode usar qualquer nome desde que
ele seja igual ao valor da constante DB_DATABASE dentro do arquivo .env que foi
criado nos passos anteriores.
</p>

<p>
Para encerrar, você irá criar as tabelas do seu banco de dados usando migrations e
usar seeds e factories para popular o banco de dados. <br>
Execute os seguintes comandos respectivamente:
</p>
<ul>
<li>php artisan migrate</li>
<li>php artisan db:seed</li>
</ul>
<p>
Tudo pronto! Agora é usar o comando "php artisan serve"(sem as aspas) e utilizar a aplicação.
Se você não modificou alguma configuração do laravel geralmente o servidor é executado
no endereço http://127.0.0.1:8000 .
</p>
<h4> Métodos</h4>
<hr>
<p>As requisições para a API devem seguir os padrões:</p>
<h5>Clientes</h5>
<div class="row">
<div class="col-md-8">
<table class="table table-bordered table-striped table-sm">
<thead class="text-center">
<tr>
<th scope="col">método</th>
<th scope="col">URI</th>
<th scope="col">Descrição</th>
</tr>
</thead>
<tbody>
<tr>

<td><span class="bg-primary rounded py-1  text-white d-block text-center"> GET</span></td>
<td>/client</td>
<td>Retorna todos os registros de clientes do banco de dados.</td>
</tr>
<tr>

<td><span class="bg-primary rounded py-1  text-white d-block text-center"> GET</span></td>
<td>/client/{client}</td>
<td>Retorna as informações de um único cliente através id.</td>
</tr>
<tr>

<td><span class="bg-success rounded py-1  text-white d-block text-center"> POST</span></td>
<td>/client</td>
<td>Insere um cliente no banco de dados.</td>
</tr>
<tr>

<td><span class="bg-warning rounded py-1  text-white d-block text-center"> PUT</span></td>
<td>/client/{client}</td>
<td>Atualiza as informações de um usuário através do id.
</td>
</tr>
<tr>

<td><span class="bg-danger rounded py-1  text-white d-block text-center"> DELETE</span></td>
<td>/client/{client}</td>
<td>Deleta um usuário através do id no banco de dados.</td>
</tr>
</tbody>
</table>
</div>
</div>

<h5 class="mt-2">Produtos</h5>
<div class="row">
<div class="col-md-8">
<table class="table table-bordered table-striped table-sm">
<thead class="text-center">
<tr>
<th scope="col">método</th>
<th scope="col">URI</th>
<th scope="col">Descrição</th>
</tr>
</thead>
<tbody>
<tr>

<td><span class="bg-primary rounded py-1  text-white d-block text-center"> GET</span></td>
<td>/product</td>
<td>Retorna todos os registros de produtos do banco de dados.</td>
</tr>
<tr>

<td><span class="bg-primary rounded py-1  text-white d-block text-center"> GET</span></td>
<td>/product/{product}</td>
<td>Retorna as informações de um único produto através id.</td>
</tr>
<tr>

<td><span class="bg-success rounded py-1  text-white d-block text-center"> POST</span></td>
<td>/product</td>
<td>Insere um produto no banco de dados.</td>
</tr>
<tr>

<td><span class="bg-warning rounded py-1  text-white d-block text-center"> PUT</span></td>
<td>/product/{product}</td>
<td>Atualiza as informações de um produto através do id.
</td>
</tr>
<tr>
<td><span class="bg-danger rounded py-1  text-white d-block text-center"> DELETE</span></td>
<td>/product/{product}</td>
<td>Deleta um produto através do id no banco de dados.</td>
</tr>
</tbody>
</table>
</div>
</div>

<h5 class="mt-2">Pedidos</h5>
<div class="row">
<div class="col-md-8">
<table class="table table-bordered table-striped table-sm">
<thead class="text-center">
<tr>
<th scope="col">método</th>
<th scope="col">URI</th>
<th scope="col">Descrição</th>
</tr>
</thead>
<tbody>
<tr>

<td><span class="bg-primary rounded py-1  text-white d-block text-center"> GET</span></td>
<td>/order</td>
<td>Retorna todos os registros de pedidos do banco de dados.</td>
</tr>
<tr>

<td><span class="bg-primary rounded py-1  text-white d-block text-center"> GET</span></td>
<td>/order/{order}</td>
<td>Retorna as informações de um único pedido através id.</td>
</tr>
<tr>

<td><span class="bg-success rounded py-1  text-white d-block text-center"> POST</span></td>
<td>/order</td>
<td>Insere um pedido no banco de dados.</td>
</tr>
<tr>

<td><span class="bg-warning rounded py-1  text-white d-block text-center"> PUT</span></td>
<td>/order/{order}</td>
<td>Atualiza as informações de um pedido através do id.
</td>
</tr>
<tr>
<td><span class="bg-danger rounded py-1  text-white d-block text-center"> DELETE</span></td>
<td>/order/{order}</td>
<td>Deleta um pedido através do id no banco de dados.</td>
</tr>
</tbody>
</table>
</div>
</div>


</div>
</div>
<div class="row bg-light pb-5">
<div class="col">
<div class="container mt-4">
<h1>Frontend</h1>
<hr>
<p>
O frontend foi feito utilizando a Engine Blade do laravel e bootstrap na versão 5 e
está todo responsivo.
</p>
<h3>Acessando o site</h3>
<hr>
<p>
O site é bem simples e intuitivo para que seu uso seja fácil e simples. Você pode
navegar entre as páginas através da barra de navegação. Todos os botões e links da
página estão na cor azul, facilitando sua localização.
</p>
<p>
Os cabeçalhos das tabelas são links, e você pode clica-lós para deixar suas informações
em ordem crescente. Os ícones no final de cada registro são respectivamente para
ver <i class="bi-eye"></i>, editar <i class="bi-pencil-square"></i> e deletar
<i class="bi-trash"></i> o item escolhido. O nome da tabela fica logo acima dela, e ao lado
dele fica obotão
para adicionar um novo registro <i class="bi-plus-square"></i> .
</p>
</div>
</div>
</div>

<footer class="text-center bg-dark pt-3 text-light ">
<p>Site Criado por <a href="https://github.com/netocastro" target="_blanck">Neto Castro</a> @2022</p>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
-->
</body>

</html>
