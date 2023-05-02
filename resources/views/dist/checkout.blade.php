<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CheckOut Reservation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./csstickets/checkout.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="total-logo">
		<div class="total">
			<span>Total:</span>
			<span class="total-n">₡10000</span>
		</div>
		<div class="logo">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Escudo_Saprissa_2012.svg/1200px-Escudo_Saprissa_2012.svg.png" height="65px">
		</div>
	</div>
	<!--End TOTAL-LOGO-->
	<div class="step">
		<div class="retry">Retry</div>
		<div class="line"></div>
		<div class="payment">Payment</div>
	</div>
	<!--End STEP-->
	<div class="cont-forms">
		<form class="form" autocomplete="off" novalidate>

			
			<fieldset class="conf-button">
				<div class="flex-wrapper">
					<button class="purchase"><span>Confirm purchase</span></button>
				</div>
			</fieldset>
		</form>
		</div><!--End CONT-FORMS-->
		
	</div><!--End CONTAINER-->
	
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./jstickets/scriptcheckout.js"></script>

</body>
</html>
