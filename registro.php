<?php include 'includes/header.php' ?>
<div class="container">
    <div class="row mx-1"> </div>
    <div class="row border-bottom">
      <div class="col-sm-6 border-end border-bottom pe-5 pb-5">
        <h3 class="pt-3">Regístrate</h3>
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Direccion de correo electronico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="mb-3">
            <label for="passwordConf" class="form-label">Confirmar contraseña</label>
            <input type="password" class="form-control" id="passwordConf">
          </div>
          <button id=btnRegistro type="submit" class="btn btn-dark col-12 mt-3">Registrarse</button>
        </form>
      </div>
      <div class="col-sm-6 ps-5 pb-5 text-end">
        <h3 class="pt-3">Iniciar sesion</h3>
        <p>Si ya te has creado un usuario puedes iniciar sesion ingresando tus datos aqui</p><br>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Direccion de correo electronico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password">
          </div>
          <button id=btnSesion type="submit" class="btn btn-dark col-12 mt-3">Iniciar sesion</button>
        </form>
      </div>
    </div>
    <div class="row mx-1"> </div>
  </div>
  <?php include 'includes/footer.php' ?>