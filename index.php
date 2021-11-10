<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
	<?php
	function convertCurrency($curr){
		return ($curr*70);
	}
	?>
	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper" style="background-color: #ffe6cc">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
						  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
						  <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/banner1.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner1.1.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner2.jpg" alt="Third slide">
		                  </div>
						  <div class="item">
		                    <img src="images/banner.jpg" alt="Fourth slide">
		                  </div>
						  <div class="item">
		                    <img src="images/banner3.jpg" alt="Fifth slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
		            <h2>Products on</h2>
					
					 <!-- <div class="flex-container" style = "display: flex; padding:5px;">
						<div class = "flex-child" style = "flex:3;border:5px solid white;padding:5px;" >
						
    						
								<div class="card" style="width: 18rem;">
								<img src="images/suit.png" class="card-img-top" alt="royal suit" style="width: 140%;height: 40vh;object-fit: cover;">
								<div class="card-body">
									<h3 class="card-title" style="padding-left:10px;"><b>Royal Embroidery</b></h3>
									<p class="card-text" style="padding-left:10px;">An ethnic royal embroideried suit designed and tailored by the top craftsman of India. A suit that will...</p>
									<a href="/rentall/product.php?product=royal-embroidery-suit" class="btn btn-primary" style="padding-left:10px;">More Info</a>
								</div>
							</div>
						</div>
						
						<div class = "flex-child" style = "flex:3;border:5px solid white;padding:5px;">
							<div class="card" style="width: 18rem;">
								<img src="images/gate.png" class="card-img-top" alt="dell inspiron" style="width: 140%;height: 40vh;object-fit: cover;">
								<div class="card-body">
									<h3 class="card-title" style="padding-left:10px;"><b>GATE CSE/IT 2022</b></h3>
									<p class="card-text" style="padding-left:10px;">Best selling Book for Gate CSE/IT 2022. Previous years questions with well defined and structured...</p>
									<a href="/rentall/product.php?product=gate-cse-it-2022" class="btn btn-primary" style="padding-left:10px;">More Info</a>
								</div>
							</div>
						</div>
						
						<div class = "flex-child" style = "flex:3;border:5px solid white;padding:5px;">
							<div class="card" style="width: 18rem;">
								<img src="images/samsung-galaxy-s9-128-gb.jpg" class="card-img-top" alt="samsung galaxy" style="width: 140%;height: 40vh;object-fit: cover;">
								<div class="card-body">
									<h3 class="card-title" style="padding-left:10px;"><b>Samsung Galaxy S9</b></h3>
									<p class="card-text" style="padding-left:10px;">Dual Apperture lens.Supports F1.5 and F2.4 mode 128 GB Storage 6.0 GB Internal RAM...</p>
									<a href="http://localhost/rentall/product.php?product=samsung-galaxy-s9" class="btn btn-primary" style="padding-left:10px;">More Info</a>
								</div>
							</div>
						</div>
						
					</div>
					<div class="flex-container" style = "display: flex; padding:5px;">
						<div class = "flex-child" style = "flex:3; border:5px solid white;padding:5px;">
							<div class="card" style="width: 18rem;">
								<img src="images/dell-inspiron-5675-gaming-pc-recon-blue.jpg" class="card-img-top" alt="dell inspiron" style="width: 140%;height: 40vh;object-fit: cover;">
								<div class="card-body">
									<h3 class="card-title" style="padding-left:10px;"><b>Dell CPU</b></h3>
									<p class="card-text" style="padding-left:10px;">It's a Gaming PC. Windows OS (Inbuilt) 16.0 GB. Inbulit Ram Graphics Card Supported....</p>
									<a href="http://localhost/rentall/product.php?product=dell-inspiron-5675" class="btn btn-primary" style="padding-left:10px;">More Info</a>
								</div>
							</div>
						</div>
						
						<div class = "flex-child" style = "flex:3;border:5px solid white;padding:5px;">
							<div class="card" style="width: 18rem;">
								<img src="images/apple-9-7-ipad-32-gb-gold.jpg" class="card-img-top" alt="dell inspiron" style="width: 140%;height: 40vh;object-fit: cover;">
								<div class="card-body">
									<h3 class="card-title" style="padding-left:10px;"><b>Apple Ipad Gold</b></h3>
									<p class="card-text" style="padding-left:10px;">9.7 inch Retina Display, 2048 x 1536 Resolution Apple iOS 9, A9X chip with 64bit architecture...</p>
									<a href="/rentall/product.php?product=apple-9-7-ipad-32-gb-gold" class="btn btn-primary" style="padding-left:10px;">More Info</a>
								</div>
							</div>
						</div>
						
						<div class = "flex-child" style = "flex:3;border:5px solid white;padding:5px;">
							<div class="card" style="width: 18rem;">
								<img src="images/dell-inspiron-15-5000-15.jpg" class="card-img-top" alt="dell inspiron" style="width: 140%;height: 40vh;object-fit: cover;">
								<div class="card-body">
									<h3 class="card-title" style="padding-left:10px;"><b>Dell Inspiron</b></h3>
									<p class="card-text" style="padding-left:10px;">Windows OS.<br> 4.0 GB Inbulit Ram.<br>500 GB HDD.<br>Graphics card support...</p>
									<a href="http://localhost/rentall/product.php?product=dell-inspiron-15-5000" class="btn btn-primary" style="padding-left:10px;">More Info</a>
								</div>
							</div>
						</div>
					
					</div>  -->


					<div class='row'>
					<div class='col-sm-4'>
	       				<div class='box box-solid'>
		       				<div class='box-body prod-body'>
		       				<img src="images/suit.png" width='100%' height='230px' class='thumbnail'>
		       				<h3>Royal Embroidery</h3>
							<p>An ethnic royal embroideried suit desi...</p>
		       				</div>	
		       				<div class='box-footer'>
							  <i class="fa fa-plus-square"></i> <a style="font-weight:bold;" href="/rentall/product.php?product=royal-embroidery-suit">More Info</a>
		       				</div>
	       					</div>
	       				</div>


						<div class='col-sm-4'>
	       				<div class='box box-solid'>
		       				<div class='box-body prod-body'>
		       				<img src="images/gate.png" width='100%' height='230px' class='thumbnail'>
		       				<h3>GATE CSE/IT 2022</h3>
							   <p>Best selling Book for Gate CSE/IT 2022...</p>
		       				</div>	
		       				<div class='box-footer'>
							  <i class="fa fa-plus-square"></i> <a style="font-weight:bold;" href="/rentall/product.php?product=gate-cse-it-2022" >More Info</a>
		       				</div>
	       					</div>
	       				</div>

						<div class='col-sm-4'>
	       				<div class='box box-solid'>
		       				<div class='box-body prod-body'>
		       				<img src="images/samsung-galaxy-s9-128-gb.jpg" width='100%' height='230px' class='thumbnail'>
		       				<h3>Samsung Galaxy S9</h3>
							   <p>Dual Apperture lens.Supports F1.5 and F2.4</p>
		       				</div>	
		       				<div class='box-footer'>
							  <i class="fa fa-plus-square"></i> <a style="font-weight:bold;" href="http://localhost/rentall/product.php?product=samsung-galaxy-s9">More Info</a>
		       				</div>
	       					</div>
	       				</div>
						
						<div class='col-sm-4'>
	       				<div class='box box-solid'>
		       				<div class='box-body prod-body'>
		       				<img src="images/dell-inspiron-5675-gaming-pc-recon-blue.jpg" width='100%' height='230px' class='thumbnail'>
		       				<h3>Dell CPU</h3>
							   <p>It's a Gaming PC+Windows OS (Inbuilt) 16...</p>
		       				</div>	
		       				<div class='box-footer'>
							  <i class="fa fa-plus-square"></i> <a style="font-weight:bold;" href="http://localhost/rentall/product.php?product=dell-inspiron-5675" >More Info</a>
		       				</div>
	       					</div>
	       				</div>
						
						<div class='col-sm-4'>
	       				<div class='box box-solid'>
		       				<div class='box-body prod-body'>
		       				<img src="images/apple-9-7-ipad-32-gb-gold.jpg" width='100%' height='230px' class='thumbnail'>
		       				<h3>Apple Ipad Gold</h3>
							   <p>9.7 inch Retina Display, 2048 x 1536 Reso...</p>
		       				</div>	
		       				<div class='box-footer'>
							  <i class="fa fa-plus-square"></i> <a style="font-weight:bold;" href="/rentall/product.php?product=apple-9-7-ipad-32-gb-gold">More Info</a>
		       				</div>
	       					</div>
	       				</div>

						<div class='col-sm-4'>
	       				<div class='box box-solid'>
		       				<div class='box-body prod-body'>
		       				<img src="images/dell-inspiron-15-5000-15.jpg" width='100%' height='230px' class='thumbnail'>
		       				<h3>Dell Inspiron</h3>
							   <p>Windows OS+ 4.0 GB Inbulit Ram+ 500 GB...</p>
		       				</div>	
		       				<div class='box-footer'>
							  <i class="fa fa-plus-square"></i> <a style="font-weight:bold;" href="http://localhost/rentall/product.php?product=dell-inspiron-15-5000">More Info</a>
		       				</div>
	       					</div>
	       				</div>





					</div>




					


					<h2>Our Top Rented Items for this Month</h2>
                    <?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
								$res = convertCurrency($row['price']);
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
												   <p>Most Rented Item</p>
		       								</div>
											
		       								<div class='box-footer'>
		       									<b>&#8377; ".number_format($res, 2)." /day</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	<div class="col-sm-3">
				<?php include 'includes/sidebar.php'; ?>
				</div>
	        </div>
	      </section>

	    </div>
	  </div>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

</body>
</html>