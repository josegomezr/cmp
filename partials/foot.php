<hr class="footer-divider my-1" />
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4">
        <div class="pt-3 pb-4">
          <img src="img/logo-oscuro.png" class="img-fluid d-block mx-auto" />
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div>
          <h3 class="footer-title">CONTACTO</h3>
          <ul class="list-unstyled">
            <li>X Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</li>
            <li>X Lorem ipsum dolor sit amet</li>
            <li>X +51 999 999999</li>
            <li>X mail@mail.er</li>
            <li>X @SocialMedia</li>
            <li>X @SocialMedia</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div class="pb-3">
          <img src="placeholder.php/300x250?text=facebook-page" class="img-fluid d-block mx-auto">
        </div>
      </div>
    </div>
  </div>
</section>
<section id="footer-note">

</section>
  
  <?php if (getenv('PROD') == 1): ?>
    <script src="scripts.js"></script>
  <?php else: ?>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <?php endif; ?>
</body>
</html>