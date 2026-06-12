<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - Brasa Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f7f4f1;
            color: #2f211c;
        }

        .admin-login-card {
            width: min(100%, 420px);
            padding: 32px;
            background: #fff;
            border: 1px solid rgba(79, 51, 40, .14);
            border-radius: 8px;
            box-shadow: 0 16px 40px rgba(79, 51, 40, .1);
        }

        .admin-login-brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 24px;
            color: #4f3328;
            font-size: 1.25rem;
            font-weight: 800;
            text-decoration: none;
        }

        .admin-login-card h1 {
            margin-bottom: 8px;
            font-size: 1.6rem;
            font-weight: 800;
        }

        .admin-login-card p {
            color: #6d5b53;
        }

        .btn-admin {
            background: #4f3328;
            border-color: #4f3328;
            color: #fff;
        }

        .btn-admin:hover,
        .btn-admin:focus {
            background: #3f281f;
            border-color: #3f281f;
            color: #fff;
        }
    </style>
</head>
<body>
    <main class="admin-login-card">
        <a class="admin-login-brand" href="<?= base_url('admin/login') ?>">
            <i class="hgi-stroke hgi-dashboard-square-01"></i>
            <span>Brasa Admin</span>
        </a>

        <h1>Acesso administrativo</h1>
        <p>Entre com uma conta de administrador para acessar o painel.</p>

        <?php if (session()->getFlashdata('erro')): ?>
            <div class="alert alert-danger">
                <?= esc(session()->getFlashdata('erro')) ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('sucesso')): ?>
            <div class="alert alert-success">
                <?= esc(session()->getFlashdata('sucesso')) ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('admin/login') ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="<?= esc(old('email')) ?>"
                    class="form-control"
                    autocomplete="username"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="senha" class="form-label">Senha</label>
                <input
                    type="password"
                    name="senha"
                    id="senha"
                    class="form-control"
                    autocomplete="current-password"
                    required
                >
            </div>

            <button type="submit" class="btn btn-admin w-100">
                Entrar no admin
            </button>
        </form>

        <a href="<?= base_url('/') ?>" class="d-inline-block mt-4 text-decoration-none">
            Voltar para o site
        </a>
    </main>
</body>
</html>
