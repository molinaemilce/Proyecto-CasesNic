<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/fernando.css">
  <link rel="stylesheet" href="./css/crud.css">
  <link rel="stylesheet" href="./css/cristian.css">
</head>

<body>
  <header class="bg-dark">
    <div class="sub-header container-xxl">
      <div>
        <ul>
          <li><a href="">+12121234</a></li>
          <li>|</li>
          <li><a href="">hoasdoasd@gmail.com</a></li>
        </ul>
      </div>

      <div>
        <ul>
          <li><a href="../PROJECT/login.php">Iniciar sesion</a></li>
          <li>|</li>
          <li><a href="../PROJECT/registro.php">Crear cuenta</a></li>
        </ul>
      </div>
    </div>
  </header>
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid text-white container-xxl">
      <a class="navbar-brand" href="../PROJECT/index.php">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item dropdown">
            <a class="nav-link" href="../PROJECT/productos.php" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu bg-black" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="../PROJECT/productos.php">Fundas</a></li>
              <li><a class="dropdown-item" href="#">Auriculares</a></li>
              <li><a class="dropdown-item" href="#">Accesorios</a></li>
              <li><a class="dropdown-item" href="#">Acesorios Apple</a></li>
              <li><a class="dropdown-item" href="#">Protectores de pantalla</a></li>
              <li><a class="dropdown-item" href="#">Cargadores</a></li>
              <li><a class="dropdown-item" href="#">Otros</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Preguntas frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cómo comprar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../casenic_proyecto/crud.php">CRUD(admin)</a>
          </li>
        </ul>
        <form class="d-flex align-items-center">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Buscar">

          <i class="fa-solid fa-cart-shopping" id="carrito"></i>

        </form>
        <div class="sub-header-burger container-fluid">
          <div>
            <ul>
              <li><a href="../PROJECT/login.php">Iniciar Sesion</a></li>
              <li>|</li>
              <li><a href="../PROJECT/registro.php">Crear cuenta</a></li>
            </ul>
          </div>
          <div>
            <ul>
              <li><a href="">+12121234</a></li>
              <li>|</li>
              <li><a href="">hoasdoasd@gmail.com</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </nav>