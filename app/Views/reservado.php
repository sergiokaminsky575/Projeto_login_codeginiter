<?= $this->extend('layouts/main_layouts') ?>
<?= $this->Section('content')?>

<div class="container-fluid my-5" style="background-color:rgb(3, 98, 194);">
    <div class="row">
        <div class="col">
            <h4>Area Reservada</h4>
        </div>
        <div class="col text-end">
            <span class="badge bg-primary">Bem vindo, <?= session()->get('usuario') ?></span>
            <a href="<?= base_url('logout') ?>" class="btn btn-danger">Sair</a>
        </div>
    </div>

</div>

<?= $this->endSection()?>
