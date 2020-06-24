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
  <link rel="stylesheet" href="css/style.css" type="text/css">
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

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/Slide1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/Slide2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/Slide3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- About Us -->
  <div class="row">
    <div class="column-6" id="aboutUs">
      <h1>ABOUT US</h1>
      <br>
      <h6><strong><em>"Every piece of gemstone tells a story"</em></strong></h6>
      <br>
      <p id="desAbout"> 
        We are specialists in Colombian Emeralds and also supply Ruby, Sapphire, and Semi-Precious stones. Located in Hong Kong and Thailand, we participate in shows globally. We aim to provide you with certified and quality products.
        <br>
        <br>

We have been in business since 1990 and have great knowledge of the industry. We aim to give the best prices in the market as well as maintain a high-quality standard. We are committed to cater to what our customers desire and give the best for our customers.
      </p>
    </div>
    <div class="column-6" id="desLogo">
      <img src="img/logo1.png" alt="">
    </div>
  </div>

  <!-- Product Showcase -->
  <div class="Showcase">
    <h1 id="titleShowcase">PRODUCTS</h1>
    <div class="row show">
      <div onclick="window.location.href='product.php?p_cat=1'" class="column" id="Emeralds">
        <h2>EMERALD</h2>
        <p class="desShow">A gemstone of the spring, signifying truth and love.
</p>
      </div>
      <div onclick="window.location.href='product.php?p_cat=2'" class="column" id="Ruby">
        <h2>RUBY</h2>
        <p class="desShow">A gemstone of the summer, bringing happiness and passion.</p>
      </div>
      <div onclick="window.location.href='product.php?p_cat=3'" class="column" id="Sapphire">
        <h2>SAPPHIRE</h2>
        <p class="desShow">A gemstone of the fall, promoting wisdom and spirituality. </p>
      </div>
      <div onclick="window.location.href='product.php?p_cat=4'" class="column" id="SPrecious">
        <h2>SEMI PRECIOUS STONES</h2>
        <p class="desShow ln2">A variety of exquisite gem-stones presenting delicacy.</p>
      </div>
    </div>
    <button onclick="window.location.href='product.php'" type="button" id="showBtn" class="btn btn-lg btn-outline-dark">View More</button>
  </div>

  <!-- Events -->
  <div class="Shows">
    <h1>EVENTS</h1>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">
              <img class="d-block w-100" src="img/hk.jpg" alt="1 slide">
            </div>
            <div class="col-3">
              <img class="d-block w-100" src="img/hk2.jpg" alt="2 slide">

            </div>
            <div class="col-3">
              <img class="d-block w-100" src="img/jmahk.png" alt="3 slide">
            </div>
            <div class="col-3">
              <img class="d-block w-100" src="img/chn.jpg" alt="4 slide">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-3">
              <img class="d-block w-100" src="img/bkk1.jpeg" alt="7 slide">
            </div>
            <div class="col-3">
              <img class="d-block w-100" src="img/las.png" alt="5 slide">
            </div>
            <div class="col-3">
              <img class="d-block w-100" src="img/shn.jpg" alt="8 slide">
            </div>
            <div class="col-3">
              <img class="d-block w-100" src="img/tus.png" alt="6 slide">
            </div>
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

</body>

</html>
