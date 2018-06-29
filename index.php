<?php 
	require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Store</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
<main>
<div class="main-wrapper">
<div class="container-fluid">

	<!-- Section: Products v.3 -->
	<section class="text-center my-5">

		<!-- Section heading -->
		<h2 class="h1-responsive font-weight-bold text-center my-5">Test Store</h2>
		<!-- Section description -->
		<p class="grey-text text-center w-responsive mx-auto mb-5">Test store for the integration of the payment processor <a href="https://stripe.com"> Stripe</a>.</p>

		<?php 
		$colNum = 1;

		foreach ($products as $productID => $attributes) {
			if($colNum == 1) {
				echo '<div class="row">';
			}
			
			echo '
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
					<!-- Card -->
					<div class="card align-items-center">
						<!-- Card image -->
						<div class="view overlay">
							<img src="'.$attributes['img_url'].'" class="card-img-top" alt="">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<!-- Card image -->
						<!-- Card content -->
						<div class="card-body text-center">
							<!-- Category & Title -->
							<a href="" class="grey-text">
								<h5>'.$attributes['section'].'</h5>
							</a>
							<h5>
								<strong>
									<a href="" class="dark-grey-text">'.$attributes['title'].'
										<span class="badge badge-pill danger-color">NEW</span>
									</a>
								</strong>
							</h5>
							<h4 class="font-weight-bold blue-text">
								<strong>'.($attributes['price']/100).'$</strong>
							</h4>
						</div>
						<form action="stripeIPN.php?id='.$productID.'" method="POST">
						  <script
						    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
						    data-key="'.$stripeDetails['publishableKey'].'"
						    data-amount="'.$attributes['price'].'"
						    data-name="'.$attributes['title'].'"
						    data-description="Widget"
						    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
						    data-locale="auto">
						  </script>
						</form>
						<br>
						<!-- Card content -->
					</div>
					<!-- Card -->
				</div>';

			if($colNum == 4) {
				echo '</div>';
				echo '<br>';
				$colNum = 0;
			} 
			else {
				$colNum++;
			}


		}
		?>	

		</div>
		<!-- Grid row -->

	</section>
	<!-- Section: Products v.3 -->
</div>
</div>
</div>	
</main>


	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>


