<?php
  include("includes/db.php");
  include("includes/functions.php")
?>

<?php

if(isset($_GET['pro_id'])){

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";

    $run_product = mysqli_query($con,$get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['category_id'];

    $pro_title = $row_product['product_title'];

    $pro_cts = $row_product['product_cts'];

    $pro_pcs = $row_product['product_pcs'];

    $pro_img = $row_product['product_img'];

    $pro_shape = $row_product['product_shape'];

    $pro_colorstone = $row_product['product_colorstone'];

    $pro_modification = $row_product['product_modification'];

    $pro_certification = $row_product['product_certification'];

    $pro_category = $row_product['product_category'];

    $pro_size = $row_product['product_size'];

    $pro_origin = $row_product['product_origin'];

    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

    $run_p_cat = mysqli_query($con,$get_p_cat);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['cat_title'];

}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167423393-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167423393-1');
</script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color Rocks Store</title>

  <!-- CSS Dependencies -->
  <link rel="stylesheet" href="css/product.css" type="text/css">
  <link rel="stylesheet" href="css/details.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- JS Dependencies -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/style.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<!-- Body -->
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <a id="Logo" class="navbar-brand" href="https://colorrockshk.com/">
      <img src="img/logo2.png" class="logoNav">
      COLOR ROCKS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="product.php">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactUs.php">CONTACT US</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar Finish -->

  <!-- Bread Crum -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="https://colorrockshk.com/">Home</a></li>
      <li class="breadcrumb-item" aria-current="page"><a href="product.php">Products</a></li>
      <li class="breadcrumb-item"><a href="product.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></li>
      <li class="breadcrumb-item active"> <?php echo $pro_title; ?> </li>
    </ol>
  </nav>
  <!-- Bread Crum Finish-->

  <div class="headerC">
    <h1 id="contentTitle"><?php echo $pro_colorstone; ?></h1>
  </div>

  <div id="content">
    <div class="container">
      <div class="row" id="inquireRow">
        <div class="col-md-3">

          <?php
            include("includes/sidebar.php");
          ?>

        </div>
        <div class="col-md-5">
          <img id = "productImage" style="width:100%;" src="<?php echo $pro_img; ?>">
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"><span><?php echo $pro_title; ?></span></h4>
            </div>

            <div class="panel-body">
              <h6>Cts: <?php echo $pro_cts; ?></h6>
              <h6>Pcs: <?php echo $pro_pcs; ?></h6>
              <h6>Color Stone: <?php echo $pro_colorstone; ?></h6>
              <h6>Shape: <?php echo $pro_shape; ?></h6>
              <h6>Modification: <?php echo $pro_modification; ?></h6>
              <h6>Size: <?php echo $pro_size; ?></h6>
              <h6>Origin: <?php echo $pro_origin; ?></h6>
              <h6>Category: <?php echo $pro_category; ?></h6>
              <h6>Certification: <?php echo $pro_certification; ?></h6>
              <center><a id="qBtn" target="_blank" href="mailto:info@colorrockshk.com?subject=<?php echo $pro_title; ?>%20Cts:%20<?php echo $pro_cts; ?>" class="btn btn-outline-dark">Ask for a quote</a></center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Other products they might like */ -->
  <div class="mag">
    <h3 id="magTitle">Products you may like</h3>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <?php
              getCarousel();
            ?>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <?php
              getCarousel();
            ?>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- Footer -->
  <?php
    include("includes/footer.php");
  ?>
  <!-- Footer Finish-->

  <script type="text/javascript" src="js/style.js"></script>
</body>

</html>
