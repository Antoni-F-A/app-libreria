<?php include_once('public/plantilla/header.php');?>

<div class="container">
    <div class="row">
        <div class="col-md-12 order-md-1 contenedor-registro">            
            <form class="needs-validation form-registro" novalidate>
                <img class="mb-4 perfil" src="public/img/01_perfil_login.jpg" alt="" >
                <h1 class="h3 mb-3 font-weight-normal titulo">Registrarse</h1>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="id_nombre" class="sr-only">Nombre</label>
                        <input type="text" class="form-control" id="id_nombre" placeholder="Ingrese su nombre" value="" required>                    
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="id_apellido" class="sr-only">Apellidos</label>
                        <input type="text" class="form-control" id="id_apellido" placeholder="Ingrese sus apellidos" value="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="id_telefono" class="sr-only">Telefono</label>
                        <input type="number" class="form-control" id="id_telefono" placeholder="Telefono" value="" required>                    
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="id_direccion" class="sr-only">Apellidos</label>
                        <input type="text" class="form-control" id="id_direccion" placeholder="Dirección" value="" required>
                    </div>
                </div>                

                <div class="mb-3">
                    <label for="id_email" class="sr-only">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="id_email" placeholder="tu@dominio.com">
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="username" >Usuario</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="usuario" required>
                        </div>                  
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="id_clave" >Clave</label>
                        <input type="password" class="form-control" id="id_clave" placeholder="Clave" value="" required>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="id_rol">Rol</label>
                        <select class="custom-select d-block w-100" id="id_rol" required>
                            <option value="">Argentina</option>
                            <option>California</option>
                        </select>
                    </div>
                </div>                
                <button class="btn btn-primary btn-lg btn-block" type="submit">Registrame</button>
            </form>
        </div>
    </div>
</div>

<?php include_once('public/plantilla/footer.php');?>