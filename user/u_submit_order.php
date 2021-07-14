
<?php
$template_header;
?>

<style>
	.img_change {
		position: absolute;
		top: 0;
		left: 0;

		background-color: rgba(0,0,0,0.8);
		color: #fff;
		font-weight: bold;

		cursor: pointer;
	}
	.img_preview {
		object-fit: contain;
		min-height: 10rem;
		max-height: 12rem;
		border: 1px solid #000;
	}
</style>
<body class="" style="background-color: rgba(241, 182, 171, 1);">
	<?php $this->load->view("user/template/u_t_navbar"); ?>
	<div class="container px-5 rounded pb-5" style="background-color: rgba(220, 138, 107, 0.40);">
		<span>
			<h1 class="m-0" style="padding-top: 60px;">Place Order</h1>
		</span>
		<div class="row mt-5">
			<div class="col-3"></div> 
			<div class="col-6">
				<?=form_open(base_url() . "place_order", "method='POST' enctype='multipart/form-data'")?>
					<div class="row mt-2">
						<h3 class="font-weight-bold">Grand Total: </h3><h3><?=number_format($grand_total, 2)?></h3>
					</div>
					<div class="row mt-2">
						<h2>Payment Method</h2>
					</div>
					<div class="row mt-2">
						<div class="col-9">
							<select class="w-100" name="inp_payment_method">
								<option value="gcash">GCash</option>
							</select>
						</div>
					</div>
					<div class="row mt-2">
						<span>(Send Payment to GCash # 0999999999)</span>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Ref No: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_ref_no" placeholder="Ref No" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Proof of Payment (Img / Screenshot): </h5>
						</div>
						<div class="col-9">
							<div class="img_box">
								<div class="img_change w-100 h-100 p-3 text-center d-none">
									Change Image
								</div>
								<input class="d-none img_input" id="product_image" type="file" name="inp_img">
								<img class="w-100" id="image_preview" src="<?=base_url()?>assets/img/no_img.png" height="150" style="object-fit: contain;">
							</div>
						</div>
					</div>
					<div class="row mt-2">
						<h2>Address</h2>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Zip Code: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_zip_code" placeholder="Zip Code" value="<?=$account_details['zip_code']?>" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Country: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_country" placeholder="Country" value="<?=$account_details['country']?>" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Province: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_province" placeholder="Province" value="<?=$account_details['province']?>" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">City: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_city" placeholder="City" value="<?=$account_details['city']?>" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Street/Road: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_street" placeholder="Street/Road" value="<?=$account_details['street']?>" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">House Number/Floor/Bldg./etc.: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_address" placeholder="House Number/Floor/Bldg./etc." value="<?=$account_details['address']?>" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-12">
							<input type="submit" value="Place Order">
						</div>
					</div>
				<?=form_close()?>
			</div>
			<div class="col-3"></div>
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
<script type="text/javascript">
	$(document).ready(function () {
		$(document).on("mouseenter", ".img_box", function() {
			$(this).children(".img_change").removeClass("d-none");
		}).on("mouseleave", ".img_box", function() {
			$(this).children(".img_change").addClass("d-none");
		});
		$(document).on("click", ".img_change", function() {
			$(this).siblings(".img_input").trigger("click");
		});

		$(document).on("change", "#product_image", function() {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.readAsDataURL(this.files[0]);
				reader.onload = function(e) {
					$("#image_preview").attr("src", e.target.result);
				};
			}
		});
	});
</script>
</html>