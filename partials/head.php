<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CMP</title>

    <?php if (getenv('PROD') == 1): ?>
    <link rel="stylesheet" type="text/css" href="dist/style.css">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="dist/main.css">
    <?php endif; ?>
</head>
<body>
  <section id="header">
    <nav class="navbar navbar-expand-lg navbar-cmp bg-cmp-nav">
      <a class="navbar-brand d-lg-none" href="#">&nbsp;</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nuestra Empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Marcas</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contáctenos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="badge-cmp">
        <div class="badge-cmp-wrapper">
            <img src="img/logo-claro.png">
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-cmp-dark bg-dark d-none d-lg-block">
      <a class="navbar-brand d-md-none" href="#">&nbsp;</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Capacitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Novedades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Consejos</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Atención al Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Compra Online</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <div class="clearfix"></div>
