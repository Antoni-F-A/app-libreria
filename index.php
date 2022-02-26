<?php 

include_once('public/plantilla/header.php');
include('db.php');
    $consulta   = "SELECT * FROM usuario";
    $sentencia  = $conexion->prepare($consulta);
    $sentencia->execute();
    $filas      = $sentencia->rowCount();

?>

<form class="form-loguin" method="POST">
    <img class="mb-4 perfil" src="public/img/01_perfil_login.jpg" alt="" >
    <h1 class="h3 mb-3 font-weight-normal titulo">Iniciar de Sesion</h1>
    <label for="id_usario" class="sr-only">Usuario</label>
    <input type="text" id="id_usario" class="form-control" placeholder="Agregar email" name="txt_usuario" required autofocus>
    <label for="id_clave" class="sr-only">Clave</label>
    <input type="password" id="id_clave" class="form-control mt-2" placeholder="Clave" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me" name="txt_nombre"><?php echo "Cantidad de usuarios: ".$filas;?>
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    <div class="registro">
        <a href="registrarse.php" class="registrarse">Registrarse</a>
    </div>
    
    <p class="mt-5 mb-3 text-muted copyright">&copy; Antoni - 2021</p>
</form>

<?php include_once('public/plantilla/footer.php');?>