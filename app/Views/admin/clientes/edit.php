<?php $titulo = 'Editar Cliente'; ?>
<?= view('admin/layout_top') ?>

<h1>Editar Cliente</h1>

    <form action="<?= base_url('admin/clientes/update/'.$cliente['id']) ?>" method="post">

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

        <a href="<?= base_url('admin/clientes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

