<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Series</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Series</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Series</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Peliculas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categorias</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    <main>
      <div></div>
      <div></div>
      <div class="estilos-default"></div>
        <div class="portada">
            <div class="contenedor">
                <h3 class="titulo">ChainsawMan</h3>
                <p class="descripcion">Denji es un adolescente que vive con un demonio motosierra llamado Pochita. Para pagar la deuda que le dejó su padre tras su muerte, ha tenido que ganarse el pan como puede matando demonios y vendiendo sus cadáverse a la mafia, aunque su vida siempre ha sido miserable.</p>
                <button class="boton">Reproducir</button>
                <button class="boton">Informacion</button>
            </div>
        </div>
    <div class="peliculas-recom">
      <div class="contenedor-titulo-controles">
        <h3>Peliculas/series recomendadas</h3>
        <div class="indicadores"></div>
      </div>
      <div class="contenedor-principal">
        <button role="button" id="flecha-izq" class="flecha-izq"><i class="bi bi-arrow-left-circle-fill"></i></button>
        <div class="contenedor-carrousel">
          <div class="carrousel">
            <div class="pelicula">
              <a href="#"><img src="./Imagenes-pagina/pelicula_1.jpg" alt=""></a>
              <a href="#"><img src="./Imagenes-pagina/pelicula_2.jpg" alt=""></a>
              <a href="#"><img src="./Imagenes-pagina/pelicula_3.jpg" alt=""></a>
              <a href="#"><img src="./Imagenes-pagina/pelicula_4.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <button role="button" id="flecha-der" class="flecha-der"><i class="bi bi-arrow-right-circle-fill"></i></button>
      </div>
    </div>
    </main>
    <footer></footer>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>