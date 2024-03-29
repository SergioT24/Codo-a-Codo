<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../1- html/img/logo_transparente.png"/>
    <link rel="stylesheet" href="../2- css/styles.css">
    <link rel="stylesheet" href="../2- css/reset.css">
    
    <title> Lengerie Luxury</title>
</head>

<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../1- html/img/logo_transparente.png" alt="" class="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../1- html/index-php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Productos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../1- html/bombachas-php">Bombachas</a></li>
                    <li><a class="dropdown-item" href="../1- html/boxer-php">Bóxer</a></li>
                    <li><a class="dropdown-item" href="../1- html/vonjuntos-php">Conjuntos</a></li>
                    <li><a class="dropdown-item" href="../1- html/medias-php">Medias</a></li>
                    <li><a class="dropdown-item" href="../1- html/pijamas-php">Pijamas</a></li>
                    <li><a class="dropdown-item" href="../1- html/remeras-php">Remeras</a></li>
                    <li><a class="dropdown-item" href="../1- html/sublimaciones-php">Sublimaciones</a></li>
                    <li><a class="dropdown-item" href="../1- html/tazas-php">Tazas</a></li>
                    <li><hr class="dropdown-divider"></li>
                  </ul>
                </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../1- html/contact-php">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../1- html/us-php">Nosotros</a>
              </li>
            </ul>
            <form class="d-flex">
              <div class="dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <a href="buy-php">
                    <img src="../1- html/img/bolsa_compras.png" alt="Logo carrito de compras" width="25">
                  </a>
                  <span id="cantidadProductos" class="badge bg-secondary">0</span>
                </a>
  
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" id="detalleProductos">
                  <ul id="listaProductos" class="list-group"></ul>
                  <div class="dropdown-divider"></div>
                  <p class="dropdown-item">Total: $<span id="totalPrecio">0</span></p>
                </div>
              </div>
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    </nav>
    </header>
    <div class="div-img">
      <div class="item" data-producto-id="1">
        <img src="../1- html/img/taza2sublimacion.jpeg" class="img-fluid" alt="...">
        <div class="precio">
          <span class="nombre">Taza sublimada</span>
          <span class="precio">$1.200</span>
          <a class="boton-comprar btn btn-primary">Comprar</a>
        </div>
      </div>
      <div class="item" data-producto-id="2">
        <img src="../1- html/img/remeras2.jpeg" class="img-fluid" alt="...">
        <div class="precio">
          <span class="nombre">Remera sublimada</span>
          <span class="precio">$1.300</span>
          <a class="boton-comprar btn btn-primary">Comprar</a>
        </div>
        </div>
        <div class="item" data-producto-id="3">
        <img src="../1- html/img/pijama2.jpeg" class="img-fluid" alt="...">
        <div class="precio">
          <span class="nombre">Pijama sublimado</span>
          <span class="precio">$1.400</span>
          <a class="boton-comprar btn btn-primary">Comprar</a>
        </div>
        </div>
      </div>
      <footer> Lengerie Luxury
        <br>
        <a class="link-FB" href="https://www.facebook.com/LengerieLuxury"><img src="../1- html/img/fb.svg" alt="Logo Facebook" width=10px></a>
        <a class="link-IG" href="https://www.instagram.com/lengerieluxuryok/"><img src="../1- html/img/ig.svg" alt="Logo Instagram" width=10px></a>
        <a href="https://web.whatsapp.com/send?phone=+541150157955" target="_blank">
          <img src="../1- html/img/wp.svg" alt="Logo de WhatsApp" width="20"></a>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="../4- javascript/script.js"></script>
</body>
</html>