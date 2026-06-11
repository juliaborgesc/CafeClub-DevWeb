<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Editar Cliente</h1>

    <form action="<?= base_url('clientes/update/'.$cliente['id']) ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input
                type="text"
                name="nome"
                value="<?= $cliente['nome'] ?>"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input
                type="email"
                name="email"
                value="<?= $cliente['email'] ?>"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input
                type="text"
                name="telefone"
                value="<?= $cliente['telefone'] ?>"
                class="form-control">
        </div>

        <hr>

        <div class="mb-3">
            <label>Perfil Sensorial</label>
            <input
                type="text"
                value="<?= $cliente['perfil'] ?>"
                class="form-control"
                readonly>
        </div>

        <div class="mb-3">
            <label>Método de Preparo</label>
            <input
                type="text"
                value="<?= $cliente['metodo_preparo'] ?>"
                class="form-control"
                readonly>
        </div>

        <div class="mb-3">
            <label>Forma de Envio</label>
            <input
                type="text"
                value="<?= $cliente['forma_envio'] ?>"
                class="form-control"
                readonly>
        </div>

        <div class="mb-3">
            <label>Moagem</label>
            <input
                type="text"
                value="<?= $cliente['moagem'] ?>"
                class="form-control"
                readonly>
        </div>

        <button type="submit" class="btn btn-primary">
            Atualizar
        </button>

        <a href="<?= base_url('clientes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

</body>
</html>