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
  <link rel="stylesheet" href="css/contactUs.css" type="text/css">
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

  <!-- Cover -->
  <img src="img/cover.jpg" style="width: 100%" alt="">

  <div class="details">
    <h1 id="dT">DETAILS</h1>
  </div>

  <div class="row" id="office">
    <div class="col-6">
      <h2>Hong Kong Office</h2>
      <ion-icon class="pIcon" name="person-circle-outline"></ion-icon>
      <h4>Contact Person</h4>
      <p>Mr. Vinod Vyas</p>
      <h4>Address</h4>
      <p>6th Floor, Front Flat, Ocean View Court, <br>31 Mody Road, Tsim Sha Tsui, Kowloon,<br> Hong Kong</p>
      <h4>Telephone</h4>
      <p>Cell: +852 6303 9575</p>
      <p>Office: +852 2723 0855</p>
    </div>
    <div class="col-6" id="bkkOffice">
      <h2>Bangkok Office</h2>
      <ion-icon class="pIcon" name="person-circle-outline"></ion-icon>
      <h4>Contact Person</h4>
      <p>Mr. Vipul Shah</p>
      <h4>Address</h4>
      <p>322/59, Room A, 23rd Floor,<br> Bangkok Gem & Jewelry Tower, Surawongse Road,<br> Bangrak, Bangkok 10500, Thailand</p>
      <h4>Telephone</h4>
      <p>Cell: +66 984 545521</p>
      <p>Office: +66 226 71198</p>
      <p>Fax: +66 226 71211</p>
    </div>
  </div>

  <div class="socialMedia">
    <h3>Connect With Us</h3>
    <ion-icon name="mail-outline"></ion-icon>
    <h4><a id="mail1" href="mailto:info@colorrockshk.com">info@colorrockshk.com</a></h4>
    <a id = "fb1" target="_blank" href="https://www.facebook.com/pg/Color-Rocks-HK-406539829727116/about/"><ion-icon name="logo-facebook"></ion-icon></a>
    <a id="insta1" target="_blank" href="https://www.instagram.com/colorrockshk/"><ion-icon name="logo-instagram"></ion-icon></a>
    <a  id="lin1" target="_blank" href="https://www.linkedin.com/in/vinod-vyas-078462148/?originalSubdomain=hk"><ion-icon name="logo-linkedin"></ion-icon></a>

  </div>

  <!-- Footer -->
  <?php
    include("includes/footer.php");
  ?>

</body>

</html>
