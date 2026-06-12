<?php $titulo = 'Editar Café'; ?>
<?= view('admin/layout_top') ?>

<h1>Editar Café</h1>

    <form action="<?= base_url('admin/cafes/update/'.$cafe['id']) ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>

            <input
                type="text"
                name="nome"
                value="<?= $cafe['nome'] ?>"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Origem</label>

            <input
                type="text"
                name="origem"
                value="<?= $cafe['origem'] ?>"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Descrição</label>

            <textarea
                name="descricao"
                class="form-control"><?= $cafe['descricao'] ?></textarea>
        </div>

        <div class="mb-3">
            <label>Perfil</label>

            <select name="perfil" class="form-select">

                <option value="Iniciante"
                    <?= $cafe['perfil'] == 'Iniciante' ? 'selected' : '' ?>>
                    Iniciante
                </option>

                <option value="Frutado"
                    <?= $cafe['perfil'] == 'Frutado' ? 'selected' : '' ?>>
                    Frutado
                </option>

                <option value="Intenso"
                    <?= $cafe['perfil'] == 'Intenso' ? 'selected' : '' ?>>
                    Intenso
                </option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Atualizar
        </button>

        <a href="<?= base_url('admin/cafes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

