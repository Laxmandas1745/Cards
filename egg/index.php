<?php
require_once __DIR__ . '/lib/Product.php';
$productModel = new Product();
$productResult = $productModel->getAllProduct();
?>
<!DOCTYPE html>
<html>
<head>
<title>Bootstrap card gallery</title>
<meta charset="UTF-8">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Vincy">
<link href="./vendor/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet" />
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<link href="./vendor/bootstrap/glyphicons/css/bootstrap.min.css"
	rel="stylesheet" />
<link rel="stylesheet" href="./vendor/bootstrap/glyphicons/css/style.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
</head>
<body>



<header class="sticky-top navigation">
  <div class=container>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a class=navbar-brand href="index.html"><img class="img-fluid" src="images/Logo-164-43.png" alt="godocs"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
        <i class="ti-align-right h4 text-dark"></i></button>
      <div class="collapse navbar-collapse text-center" id=navigation>
        <ul class="navbar-nav mx-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="search.html">Search Page</a></li>
        </ul>
        <form class="form-inline search-wrapper d-none d-lg-block" class="search-wrapper" action="search.html">
          <input id="search-by" name="s" type="search" class="form-control" placeholder="Search here ...">
          <button class="border-0 bg-white" type="submit"><i class="ti-search"></i></button>
        </form>
        <a href="changelog.html" class="btn btn-sm btn-outline-primary ml-lg-4">changelog</a>
        <a href="contact.html" class="btn btn-sm btn-primary ml-lg-4">contact</a>
      </div>
      <form class="form-inline search-wrapper d-block d-lg-none my-3" class="search-wrapper" action="search.html">
        <input id="search-by" name="s" type="search" class="form-control" placeholder="Search here ...">
        <button class="border-0 bg-white" type="submit"><i class="ti-search"></i></button>
      </form>
    </nav>
  </div>
</header>



	<div class="container mt-3 mb-5">
        <?php
        if (! empty($productResult)) {
            $productArray = array_chunk($productResult, 3);
            $i = 1;
            foreach ($productArray as $column) {
                ?>
            <div class="row mb-5">
            <?php
                foreach ($column as $k => $v) {
                    ?>
                <div class="col-md-6 col-lg-4 col-12">
				<div class="card mb-2">
					
					<div class="card-body">
						<h5 class="card-title"><?php echo $column[$k]["title"];?></h5>
						<p class="card-text"><?php echo $column[$k]["description"];?></p>
						<div class="mb-2">
                            <br>
                        <span class="font-bold"><strong>Class: SS</strong></span> <hr>
							<span class="font-bold"><strong>Price: <?php echo $column[$k]["price"];?></strong></span> <hr>
                            <p class="od">Opening Date &emsp;&emsp; Closing Date</p>
                            <span class="font-bold"><strong><?php echo $column[$k]["Opening date"]; ?>&emsp;&emsp;&emsp;</strong></span> 
                            <span class="font-bold"><strong><?php echo $column[$k]["Closing Date"];?></strong></span>
						</div>
					</div>

					<div class="card-footer">
						<div class="row">
							
							




<!-- kkkkkkkkkkkkkkkkkkkkkkk -->




                            <div class="btn-group" role="group" aria-label="...">
          
                    <button type="button" class="btn1 btn btn-primary"  id="addToCart-<?php echo $column[$k]["id"];?>"
                                    onclick="addToCart(<?php echo $column[$k]["id"];?>)">Primary</button>
                    <button type="button" class="btn2 btn btn-success" id="addToCart-<?php echo $column[$k]["id"];?>"
                                    onclick="addToCart(<?php echo $column[$k]["id"];?>)">Success</button>
                    <button type="button" class="btn3 btn btn-info" id="addToCart-<?php echo $column[$k]["id"];?>"
                                    onclick="addToCart(<?php echo $column[$k]["id"];?>)">Info</button>
                    <button type="button" class="btn4 btn btn-warning" id="addToCart-<?php echo $column[$k]["id"];?>"
                                    onclick="addToCart(<?php echo $column[$k]["id"];?>)">Warning</button>
           
                </div>
						</div>
					</div>
				</div>
			</div>
                <?php }?>
            </div>
            <?php
                $i ++;
            }
        }
        ?>
    </div>

<footer>
  <div class="container">
    <div class="row align-items-center border-bottom py-5">
      <div class="col-lg-4">
        <ul class="list-inline footer-menu text-center text-lg-left">
          <li class="list-inline-item"><a href="changelog.html">Blogs</a></li>
          <li class="list-inline-item"><a href="contact.html">contact</a></li>
          <li class="list-inline-item"><a href="search.html">Terms & Conditions</a></li>
        </ul>
      </div>
      <div class="col-lg-4 text-center mb-4 mb-lg-0">
        <a class="navbar-brand" href="index.html">
          <img class="img-fluid" src="images/Logo-164-43.png" alt="Hugo documentation theme">
        </a>
      </div>
      <div class="col-lg-4">
        <ul class="list-inline social-icons text-lg-right text-center">
          <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="py-4 text-center">
      <small class="text-light">Made with &#10084 by Illumillion. </a></small>
    </div>
  </div>
</footer>
	<script src="assets/js/card.js"></script>
</body>
</html>