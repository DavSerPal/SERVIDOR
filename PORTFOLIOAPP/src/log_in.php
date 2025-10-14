<?php ob_start(); ?>
<?php include("templates/header.php"); ?>
<?php include_once("datos.php") ?>
<div class="container">
    <h2 class="mb-5">Inicia Sesión</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="mb-3 col-sm-6 p-0">
            <label for="correo_login" class="form-label">Correo: </label>
            <input type="email" name="correo" class="form-control" id="correo_login" placeholder="usuario@dominio.com" value="<?php $_POST["correo"] ?>">
        </div>
        <div class="mb-3 col-sm-6 p-0">
            <label for="passwd_login" class="form-label">Contraseña: </label>
            <input type="password" name="passwd" class="form-control" id="passwd_login" value="<?php $_POST["passwd"] ?>">
        </div>
        <span class='text-danger'><?php print(comp_form()) ?></span>
        <?php ob_end_flush(); ?>
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

</div>

<?php include("templates/footer.php"); ?>