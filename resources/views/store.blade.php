<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Store</title>
		<link rel="stylesheet" href="css/store.css" />
	</head>
	<body>
		<header>
			<h1>Saprissa Official Store</h1>

			<div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>

				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$200</span>
						<a href="checkout"><button onclick="">Confirm purchase</button></a>
					</div>
					<p class="cart-empty">El carrito está vacío</p>
				</div>
			</div>
		</header>
		<div class="container-items">
			@foreach ($stores as $store)
			<div class="item">
				<figure>
					<img
						src="{{ $store->image }}"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>{{ $store -> article }}</h2>
					<p class="price">${{ $store -> price }}</p>
					<button class="btn-add-cart">Add to cart</button>
				</div>
			</div>
			
				@endforeach
		<script src="js/store.js"></script>
	</body>
</html>
