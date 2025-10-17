<?php include("templates/header.php"); ?>
<?php include_once("datos.php") ?>
<div class="container">
    <h2 class="mb-5">Creación de Productos</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="mb-3 col-sm-6 p-0">
            <label for="correo_login" class="form-label">Id: </label>
            <input type="text" name="id" class="form-control" placeholder="usuario@dominio.com" value="<?php $_POST["id"] ?>">
        </div>
        <br>
        <div class="mb-3 col-sm-6 p-0">
            <label for="passwd_login" class="form-label">Titulo: </label>
            <input type="text" name="titulo" class="form-control" value="<?php $_POST["titulo"] ?>">
        </div>
        <br>
        <div class="mb-3 col-sm-6 p-0">
            <label for="passwd_login" class="form-label">Descripcion: </label>
            <input type="text" name="descripcion" class="form-control" value="<?php $_POST["descripcion"] ?>">
        </div>
        <br>
        <div class="mb-3 col-sm-6 p-0">
            <label for="passwd_login" class="form-label">Imagen: </label>
            <input type="text" name="imagen" class="form-control" value="<?php $_POST["imagen"] ?>">
        </div>
        <br>
        <div class="mb-3 col-sm-6 p-0">
            <label for="passwd_login" class="form-label">Imagen: </label>
            <input type="text" name="imagen" class="form-control" value="<?php $_POST["imagen"] ?>">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

</div>

<?php include("templates/footer.php"); ?>