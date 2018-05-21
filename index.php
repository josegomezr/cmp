<?php include 'partials/head.php' ?>

<div class="jumbotron-slider jumbotron-fluid">
  <div class="container">
    <div id="carousel-jumbotron" class="carousel slide carousel-fit" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row clearfix">
            <div class="col-sm-7">
              <h1 class="cmp-highlight-title">
                primera Tenemos lo mejor
                <br>
                <span class="text-muted">para tu</span> 
                <span class="text-warning">VEHICULO</span>
              </h1>
              <a href="#" class="btn btn-cmp-blue font-weight-bold">VER PRODUCTOS</a>
            </div>
            <div class="col bg-white py-1 pl-4">
              <div class="featured-brand">
                <h3><img src="placeholder.php/32x32" class="align-middle"> Marca</h3>
                <ul class="list-group list-group-fit d-none d-sm-block">
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
              </div>
              <div class="featured-brand">
                <h3><img src="placeholder.php/32x32" class="align-middle"> Marca</h3>
                <ul class="list-group list-group-fit d-none d-sm-block">
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
              </div>
              <div class="featured-brand">
                <img src="placeholder.php/400x100" class="img-fluid">
                <p class="text-center">Texto promocional</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row clearfix">
            <div class="col-sm-7">
              <h1 class="cmp-highlight-title">
                segunda Tenemos lo mejor
                <br>
                <span class="text-muted">para tu</span> 
                <span class="text-warning">VEHICULO</span>
              </h1>
              <a href="#" class="btn btn-cmp-blue font-weight-bold">VER PRODUCTOS</a>
            </div>
            <div class="col bg-white py-1 pl-4">
              <div class="featured-brand">
                <img src="placeholder.php/400x100" class="img-fluid">
                <p class="text-center">Texto promocional</p>
              </div>
              <div class="featured-brand">
                <img src="placeholder.php/400x100" class="img-fluid">
                <p class="text-center">Texto promocional</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="text-center mb-3">
    <h1 class="cmp-bordered-header">Lo más vendido</h1>
</div>

<div class="container">
  
</div>

<div class="container">
  <div id="carousel-vendidos" class="carousel slide carousel-fit" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row no-gutters clearfix">
          <?php for ($i=0; $i != 6; $i++): ?>
            <div class="col-sm-2 col-xs-6">
              <div class="item-vendido p-1">
                <div class="mb-2">
                  <img src="placeholder.php/120x120" class="img-fluid d-block mx-auto" />
                </div>
                <a href="#" class="btn btn-sm btn-fill btn-cmp-blue text-truncate rounded mb-2">Pastillas de Freno</a>
                <h4>
                  <img src="placeholder.php/32x32" class="align-middle" />
                  Marca
                </h4>
              </div>
            </div>
          <?php endfor ?>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row no-gutters clearfix">
          <?php for ($i=0; $i != 6; $i++): ?>
            <div class="col-sm-2 col-xs-6">
              <div class="item-vendido p-1">
                <div class="mb-2">
                  <img src="placeholder.php/120x120" class="img-fluid d-block mx-auto" />
                </div>
                <a href="#" class="btn btn-sm btn-fill btn-cmp-blue text-truncate rounded mb-2">Segunda</a>
                <h4>
                  <img src="placeholder.php/32x32" class="align-middle" />
                  Marca
                </h4>
              </div>
            </div>
          <?php endfor ?>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-vendidos" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carousel-vendidos" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
</div>



<?php include 'partials/foot.php' ?>