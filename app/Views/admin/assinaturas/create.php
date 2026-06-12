<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Assinatura</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Cadastrar Assinatura</h1>

    <form action="<?= base_url('admin/assinaturas/store') ?>" method="post">

        <div class="mb-3">
            <label>Cliente</label>

            <select name="cliente_id" class="form-select">
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?= $cliente['id'] ?>">
                        <?= $cliente['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Plano</label>

            <select name="plano_id" class="form-select">
                <?php foreach ($planos as $plano): ?>
                    <option value="<?= $plano['id'] ?>">
                        <?= $plano['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Data de Início</label>

            <input
                type="date"
                name="data_inicio"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-select">
                <option value="Ativa">Ativa</option>
                <option value="Inativa">Inativa</option>
                <option value="Cancelada">Cancelada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/assinaturas') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

</body>
</html>