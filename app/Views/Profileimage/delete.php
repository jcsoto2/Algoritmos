<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar imagen de perfil<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Eliminar imagen de perfil</h1>

<p>Estas seguro?</p>

<?= form_open("/profileimage/delete") ?>

    <button>Yes</button>
    <a href="<?= site_url("/profile/show") ?>">Cancelar</a>
    
</form>

<?= $this->endSection() ?>