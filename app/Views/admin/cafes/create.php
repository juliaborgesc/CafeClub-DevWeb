<?php $titulo = 'Novo Café'; ?>
<?= view('admin/layout_top') ?>

<h1>Cadastrar Café</h1>

<?php if (session()->getFlashdata('erros')): ?>
    <div class="alert alert-danger">
        <?php foreach (session()->getFlashdata('erros') as $erro): ?>
            <div><?= esc($erro) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

    <form action="<?= base_url('admin/cafes/store') ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" value="<?= esc(old('nome')) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Origem</label>
            <input type="text" name="origem" value="<?= esc(old('origem')) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control"><?= esc(old('descricao')) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Torra</label>
            <select name="torra" class="form-select">
                <?php foreach (['Clara', 'Média', 'Média escura', 'Escura'] as $torra): ?>
                    <option value="<?= esc($torra) ?>" <?= old('torra', 'Média') === $torra ? 'selected' : '' ?>>
                        <?= esc($torra) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Perfil</label>

            <select name="perfil" class="form-select">
                <?php foreach ($perfis as $perfil): ?>
                    <option value="<?= esc($perfil) ?>" <?= old('perfil') === $perfil ? 'selected' : '' ?>>
                        <?= esc($perfil) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Forma de envio</label>
                <select name="forma_envio" class="form-select">
                    <option value="GRAOS" <?= old('forma_envio', 'GRAOS') === 'GRAOS' ? 'selected' : '' ?>>Em grãos</option>
                    <option value="MOIDO" <?= old('forma_envio') === 'MOIDO' ? 'selected' : '' ?>>Moído</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Moagem</label>
                <select name="moagem" id="moagem" class="form-select" disabled>
                    <option value=""></option>
                    <option value="FINA" <?= old('moagem') === 'FINA' ? 'selected' : '' ?>>Fina</option>
                    <option value="MEDIA_FINA" <?= old('moagem') === 'MEDIA_FINA' ? 'selected' : '' ?>>Média-fina</option>
                    <option value="MEDIA" <?= old('moagem') === 'MEDIA' ? 'selected' : '' ?>>Média</option>
                    <option value="GROSSA" <?= old('moagem') === 'GROSSA' ? 'selected' : '' ?>>Grossa</option>
                </select>
                <small class="text-muted">Disponível apenas quando a forma de envio for moído.</small>
            </div>
        </div>

        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" name="disponivel" id="disponivel" value="1" <?= old('disponivel', '1') ? 'checked' : '' ?>>
            <label class="form-check-label" for="disponivel">Café disponível</label>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/cafes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<script>
    const formaEnvio = document.querySelector('[name="forma_envio"]');
    const moagem = document.querySelector('[name="moagem"]');

    function atualizarMoagem() {
        const permiteMoagem = formaEnvio.value === 'MOIDO';
        moagem.disabled = !permiteMoagem;

        if (!permiteMoagem) {
            moagem.value = '';
        }

        moagem.required = permiteMoagem;
    }

    formaEnvio.addEventListener('change', atualizarMoagem);
    atualizarMoagem();
</script>

<?= view('admin/layout_bottom') ?>

