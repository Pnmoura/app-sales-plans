<!DOCTYPE html>

@section('title', 'Criar Venda')

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-ligth">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar brand">
                <img src="/img/up-logo.jpeg" alt="HDC Events">
            </a>
        </div>
    </nav>
</header>
<body>

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 id="title">Criar venda</h1>
    <form action="/success" method="POST">
        @csrf
        @method('POST')
        <div class="campos">
            <div class="nome">
                <label for="nome">Nome completo:</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name"
                       placeholder="Nome completo:">
            </div>
            <div class="campos">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="customer_cpf" id="customer_cpf" placeholder="CPF: ">
            </div>
            <div class="campos">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="customer_email" name="customer_email"
                       placeholder=" Digite o seu e-mail:">
            </div>
            <div class="campos">
                <label for="plans">Planos: </label>
                <input type="text" class="form-control" id="plan_offered" name="plan_offered"
                       placeholder=" Plano:">
            </div>


            <div class="campos">
                <label for="order_value">Valor do pedido: </label>
                <input type="text" step="0.01" min="0" max="10000" class="form-control" id="order_value"
                       name="order_value">
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar venda">
        </div>

    </form>
</div>
</body>

</html>
