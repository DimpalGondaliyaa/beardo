	<header id="site-header">
		<div class="container">
			<h1>Shopping cart <span>[</span> <em><a href="https://codepen.io/tag/rodeo-007" target="_blank">CodePen Challange</a></em> <span class="last-span is-open">]</span></h1>
		</div>
	</header>

	<div class="containerasa cartcontainer">

		<section id="cart"> 
			<article class="product">
				<header>
					<a class="remove">
						<img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/1.jpg" alt="">

						<h3>Remove product</h3>
					</a>
				</header>

				<div class="content">

					<h1>Lorem ipsum</h1>

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.

				</div>

				<footer class="content">
					<span class="qt-minus">-</span>
					<span class="qt">2</span>
					<span class="qt-plus">+</span>

					<h2 class="full-price">
						29.98€
					</h2>

					<h2 class="price">
						14.99€
					</h2>
				</footer>
			</article>

			<article class="product">
				<header>
					<a class="remove">
						<img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/3.jpg" alt="">

						<h3>Remove product</h3>
					</a>
				</header>

				<div class="content">

					<h1>Lorem ipsum dolor</h1>

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.
					
				</div>

				<footer class="content">
					
					<span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span>

					<h2 class="full-price">
						79.99€
					</h2>

					<h2 class="price">
						79.99€
					</h2>
				</footer>
			</article>

			<article class="product">
				<header>
					<a class="remove">
						<img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/5.jpg" alt="">

						<h3>Remove product</h3>
					</a>
				</header>

				<div class="content">

					<h1>Lorem ipsum dolor ipsdu</h1>

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.

				</div>

				<footer class="content">
					
					<span class="qt-minus">-</span>
					<span class="qt">3</span>
					<span class="qt-plus">+</span>

					<h2 class="full-price">
						53.99€
					</h2>

					<h2 class="price">
						17.99€
					</h2>
				</footer>
			</article>

		</section>

	</div>

	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>
				<h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>
				<h3 class="shipping">Shipping: <span>5.00</span>€</h3>
			</div>

			<div class="right">
				<h1 class="total">Total: <span>177.16</span>€</h1>
				<a class="btn checkbtn" href="<?= base_url(); ?>Checkout">Checkout</a>
			</div>

		</div>
	</footer>