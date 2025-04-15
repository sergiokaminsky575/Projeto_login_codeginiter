<?= $this->extend('layouts/main_layouts') ?>
<?= $this->Section('content')?>

<div class="d-flex justify-content-center align-items-center bg-dark" style="height: 100vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 rounded bg-light p-5">
            <h4 class="text-center">LOGIN</h4>
            <hr>
            <?= form_open('login_submit', ['novalidate' => true]) ?>
                <div class="mb-3">
                    <label for=text_ususario" class="form-label">Usuário</label>
                    <input type="text" name="text_usuario" id="text_usuario" class="form-control" required value="<?= old('text_usuario') ?>">
                </div>
                <div class="mb-3">
                    <label for=text_senha" class="form-label">Senha</label>
                    <input type="password" name="text_senha" id="text_senha" class="form-control" required value="<?= old('text_senha') ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-block w-100">Entrar</button>
                </div>
            <?= form_close() ?>  
           <!-- Mensagens de erros de validação -->
            <?php if (!empty($validation)): ?>
                <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

            <!-- Mensagem de login inválido -->
            <?php if (!empty($login_error)): ?>  
                <div class="alert alert-danger">
                    <div><?= $login_error ?></div>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?= $this->endSection()?>