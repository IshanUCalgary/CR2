<?php
  include("includes/db.php");
  include("includes/functions.php")
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
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- JS Dependencies -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
      <li class="breadcrumb-item active" aria-current="page">Products</li>
    </ol>
  </nav>
  <!-- Bread Crum Finish-->

  <div class="headerC">
    <h1 id="contentTitle">OUR PRODUCTS</h1>
  </div>

  <div id="content">
    <div class="container">
      <div class="row" id="inquireRow">
        <div class="col-md-3">

          <?php
            include("includes/sidebar.php");
          ?>

        </div>
        <div class="col-md-9">

          <?php

            if(!isset($_GET['p_cat'])){

              echo"

                <div class='panel'>
                  <div class='panel-heading'>
                    <h4 class='panel-title'>Inquire</h4>
                  </div>

                  <div class='panel-body'>
                    <p>Emeralds, Ruby, Sapphires, and Semi-Precious Stones. We have all you want. Browse through our products and send us a message to know more. Get the best quality of products from the specialist and own what you desire. Shop at Color Rocks.</p>
                  </div>
                </div>

              ";
            }
            getPanel();
          ?>

        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row" class="productRow">

        <?php

          if(!isset($_GET['p_cat'])){

            $per_page=12;

            if(isset($_GET['page'])){

                $page = $_GET['page'];

            }else{

                $page=1;

            }

            $start_from = ($page-1) * $per_page;

            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

            $run_products = mysqli_query($con,$get_products);

            while($row_products=mysqli_fetch_array($run_products)){

              $pro_id = $row_products['product_id'];

              $pro_title = $row_products['product_title'];

              $pro_cts = $row_products['product_cts'];

              $pro_img = $row_products['product_img'];

              echo "

              <div class='col-md-3 productItem'>

                <div class='card' style='width: 15rem;'>

                  <img class='card-img-top' src='$pro_img' alt='Card image cap'>

                  <div class='card-body text-center'>

                    <h5 class='card-title'>$pro_title</h5>

                    <p class='card-text'>Cts: $pro_cts Cts</p>

                    <a href='details.php?pro_id=$pro_id' class='btn btn-primary pLink'>View Details</a>

                  </div>
                </div>
              </div>

              ";
            }

        ?>

      </div>
    </div>
  </div>


    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <?php

        $query = "select * from products";

        $result = mysqli_query($con,$query);

        $total_records = mysqli_num_rows($result);

        $total_pages = ceil($total_records / $per_page);

            echo "

                <li class='page-item'>

                    <a class='page-link text-dark' href='product.php?page=1'> ".'First Page'." </a>

                </li>

            ";

            for($i=1; $i<=$total_pages; $i++){

                  echo "

                <li class='page-item'>

                    <a  class='page-link text-dark' href='product.php?page=".$i."'> ".$i." </a>

                </li>

            ";

            };

            echo "

                <li class='page-item'>

                    <a  class='page-link text-dark' href='product.php?page=$total_pages'> ".'Last Page'." </a>

                </li>

            ";

          }

        ?>
      </ul>
    </nav>

    <?php
        getpcatpro();
    ?>

  <?php
    include("includes/footer.php");
  ?>





</body>

</html>

<!--

<div class="col-md-3 productItem">
  <div class="card" style="width: 15rem;">
    <img class="card-img-top" src="productImages/pearShape.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Pear Shape</h5>
      <p class="card-text">Cts: 8.79 Cts</p>
      <a href="details.php" class="btn btn-primary pLink">View Details</a>
    </div>
  </div>
</div>

-->

<!--
<li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
<li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
<li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
<li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
<li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
-->
