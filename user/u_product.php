
<?php
$template_header;
?>

<body class="" style="background-color: rgba(241, 182, 171, 1);">
	<?php $this->load->view("user/template/u_t_navbar"); ?>
	<div class="container px-5 rounded pb-5" style="background-color: rgba(220, 138, 107, 0.40);">
		<span>
			<h1 class="m-0" style="padding-top: 60px;">Product View</h1>
		</span>
		<div class="row mt-5">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<img class="img-fluid img-thumbnail" src="<?php
				if (!empty($product_details["img"])) {
					echo base_url(). 'uploads/product_'. $product_details["product_id"] .'/'. explode("/", $product_details["img"])[0];
				} else {
					echo base_url(). "assets/img/no_img.png";
				}
				?>">
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 mt-md-0 mt-sm-4 p-5 ">
				<?php
				$current_qty = $product_details["qty"];
				if ($this->session->has_userdata("cart")) {
					$cart = $this->session->userdata("cart");
					$item_key = array_search($product_details["product_id"], array_column($cart, 0));
					if ($item_key !== FALSE) {
						$current_qty = $product_details["qty"] - $cart[$item_key][1];
					}
				}
				?>
				<div class="row mt-4">
					<h3 class="font-weight-normal"><?=$product_details["name"]?></h3>
				</div>
				<div class="row mt-2">
					<h4 class="font-weight-light font-italic"><?=$product_details["description"]?></h4>
				</div>
				<div class="row mt-4">
					<h5 class="font-weight-normal m-0 p-0">Type: <?=$type?></h5>
				</div>
				<div class="row mt-2">
					<h5 class="font-weight-normal m-0 p-0">Available: <?=$current_qty?></h5>
				</div>
				<div class="row mt-4 mb-2">
					<h3 class="font-weight-light">Php <?=number_format($product_details["price"], 2)?></h3>
				</div>
				<?=form_open(base_url() . "to_cart", "method='GET'")?>
					<div class="row">
						<div class="col-sm-12 col-md-3 text-center">
							<h5 class="font-weight-normal m-0 p-0">Qty:</h5>
						</div>
						<div class="col-sm-12 col-md-9">
							<input class="w-100" type="number" name="amount" value="0" min="0" max="<?=$current_qty?>">
						</div>
					</div>
					<input type="hidden" name="id" value="<?=$product_details['product_id']?>">
					<div class="row mt-2">
						<input class="btn btn-outline-dark btn-block font-weight-bold" type="submit" name="submit"  value="Add to Cart">
					</div>
					<div class="row mt-1">
						<input class="btn btn-outline-danger btn-block font-weight-bold" type="submit" name="submit"  value="Buy Now">
					</div>
				<?=form_close()?>
			</div>
		</div>
	</div>
	<footer style="background-color: white; height: auto;">
		<div class="row mx-5 py-4">
			<div class="col pl-5">
				<h6 class="mb-2">Links</h6>
					<ul class="nav flex-column">
						<li><a class="text-dark" href="#">FAQs</a></li>
						<li><a class="text-dark" href="#">About Us</a></li>
						<li><a class="text-dark" href="#">Contact Us</a></li>
						<li><a class="text-dark" href="#">Terms of Service</a></li>
						<li><a class="text-dark" href="#">Privacy Policy</a></li>
					</ul>
			</div>
			<div class="col">
				<h6>Our Location</h6>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2394169097947!2d121.16836141420649!3d14.585428981360076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b8ab23fe632f%3A0xef52767e8317fde0!2sYnares%20Center!5e0!3m2!1sen!2sph!4v1626275868868!5m2!1sen!2sph" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="col">
				<h6>Follow us on</h6>
				<ul class="nav">
					<li><a href="https://www.facebook.com/AngeliClayHandmadeShop">
						<i class="fa fa-facebook-official fa-2x nav-icon" aria-hidden="true"></i></a></li>
					<li class="ml-2 mr-2"><a href="https://www.instagram.com/angeliclayshop/">
						<i class="fa fa-instagram fa-2x nav-icon" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UC0fYsyOFOlv9TkfISLBLtww">
						<i class="fa fa-youtube-play fa-2x nav-icon" aria-hidden="true"></i></a></li>
					<li class="ml-2"><a href="https://www.pinterest.ph/lycadeocampo/">
						<i class="fa fa-pinterest-square fa-2x nav-icon" aria-hidden="true"></i></a></li>
				</ul>

				<div><i class="fa fa-envelope-o" aria-hidden="true"></i> 
					<a class="text-dark font-weight-bold" href="#">einjhel01422@gmail.com</a>
				</div>
				<div class="font-weight-bold">
					<i class="fa fa-phone" aria-hidden="true"></i> 09999155911</div>
			</div>
		</div>
	</footer>
</body>
</html>