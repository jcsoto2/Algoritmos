<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Inicio de sesion<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Inciar sesion</h1>

<div class="container">

    <?= form_open("/login/create") ?>

        <div class="field">
            <label class="label" for="email">Correo</label>
            <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>
        
        <div class="field">
            <label class="label" for="password">Contraseña</label>
            <input class="input" type="password" name="password">
        </div>
        
        <div class="field">
            <label class="checkbox" for="remember_me">
                <input type="checkbox" id="remember_me" name="remember_me"
                    <?php if (old('remember_me')): ?>checked<?php endif; ?>> Recordar Inicio de sesion
            </label>
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Iniciar</button>
            </div>

            <a href="<?= site_url("/password/forgot") ?>">Olvide mi contraseña?</a>
        </div>

    </form>

</div>

<?= $this->endSection() ?>







