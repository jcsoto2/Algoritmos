<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Contraseña olvidada<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Contraseña olvidada</h1>

<?= form_open("/password/processforgot") ?>

    <div>
        <label for="email">correo</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <button>Enviar</button>

</form>

<?= $this->endSection() ?>