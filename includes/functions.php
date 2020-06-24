<?php

$db = mysqli_connect("localhost","ishan","123456","colorRocksShop");

function getPro(){

    global $db;

    $get_products = "select * from products order by 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db,$get_products);

    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_cts = $row_products['product_cts'];

        $pro_img = $row_products['product_img'];

        echo "

        <div class='col-3'>

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

}

function getPCats(){

    global $db;

    $get_p_cats = "select * from product_categories";

    $run_p_cats = mysqli_query($db,$get_p_cats);

    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

        $p_cat_id = $row_p_cats['p_cat_id'];

        $p_cat_title = $row_p_cats['cat_title'];

        echo "

            <li>

                <a class='cLink' href='product.php?p_cat=$p_cat_id'> $p_cat_title </a>

            </li>

        ";

    }

}

/// begin getpcatpro functions ///

function getPanel(){
    global $db;

    if(isset($_GET['p_cat'])){
      $p_cat_id = $_GET['p_cat'];
        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";

        $run_p_cat = mysqli_query($db,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['cat_title'];

        $p_cat_desc = $row_p_cat['cat_desc'];

        $get_products ="select * from products where category_id='$p_cat_id'";

        $run_products = mysqli_query($db,$get_products);

        $count = mysqli_num_rows($run_products);

        if($count==0){

            echo "

            <div class='panel'>
              <div class='panel-heading'>
                <h4 class='panel-title'>No products in this category</h4>
              </div>

              <div class='panel-body'>
                <p>Search for other categories.</p>
              </div>
            </div>

            ";

        }else{

            echo "

            <div class='panel'>
              <div class='panel-heading'>
                <h4 class='panel-title'>$p_cat_title</h4>
              </div>

              <div class='panel-body'>
                <p>$p_cat_desc</p>
              </div>
            </div>

            ";

        }
    }

}

function getpcatpro(){

    global $db;

    if(isset($_GET['p_cat'])){

        $p_cat_id = $_GET['p_cat'];

        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";

        $run_p_cat = mysqli_query($db,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $get_products ="select * from products where category_id='$p_cat_id'";

        $run_products = mysqli_query($db,$get_products);

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

        echo "

          </div>
          </div>
          </div>

        ";

    }

}

/// finish getpcatpro functions ///

function getCarousel(){

  global $db;

  $get_p ="select * from products ORDER BY RAND() LIMIT 4";

  $run_p = mysqli_query($db,$get_p);

  while($row_products=mysqli_fetch_array($run_p)){
    $pro_id = $row_products['product_id'];

    $pro_title = $row_products['product_title'];

    $pro_cts = $row_products['product_cts'];

    $pro_img = $row_products['product_img'];

    echo "

      <div class='col-3'>

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


}

?>
