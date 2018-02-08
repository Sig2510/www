<?php require_once './views/partials/header.php'; ?>

<section class="jumbotron" text-center style="background-image: url(http://res.cloudinary.com/dvs1bvjhz/image/upload/c_crop,h_620,q_100,w_1920,y_250/v1517522904/home_image_qb9k0v.jpg); background-size: 100%;">
  <div class="container" style="margin: 0px 15px; width: 450px;">
    <h1 class="jumbotron-heading" style="color: white">Album example</h1>
    <p><b><font color="white">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p></b></font>
    <p>
      <a href="#" class="btn btn-success">Main call to action</a>
      <a href="#" class="btn btn-secondary">Secondary action</a>
    </p>
  </div>
</section>

<div class="album text-muted">
  <div class="container">

    <div class="row">
      <?php foreach ($products as $product) { ?>
        <?php require './views/partials/product_card.php'; ?>
      <?php } ?>
    </div>

  </div>
</div>

<?php require_once './views/partials/footer.php'; ?>
