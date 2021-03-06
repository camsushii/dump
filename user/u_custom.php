
<?php
$template_header;
?>

<style>
	.img_box {
		cursor: pointer;
		margin: auto;
	}
	.img_change {
		position: absolute;
		top: 0;
		left: 0;

		background-color: rgba(0,0,0,0.8);
		color: #fff;
		font-weight: bold;
	}
	.img_preview {
		object-fit: contain;
		min-height: 10rem;
		max-height: 12rem;
		border: 1px solid #000;
	}
	.img_remove {
		position: absolute;
		top: 0;
		right: 0;
		color: red !important;
	}
</style>
<body class="" style="background-color: rgba(241, 182, 171, 1);">
	<?php $this->load->view("user/template/u_t_navbar"); ?>
	<div class="container px-5 rounded pb-5" style="background-color: rgba(220, 138, 107, 0.40);">
		<span>
			<h1 class="m-0" style="padding-top: 60px;">Order Custom</h1>
		</span>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 mt-md-0 mt-sm-4 p-5">
				<?=form_open(base_url() . "place_custom_order", "method='POST' enctype='multipart/form-data'")?>
					<div id="custom_product_details">
						<div class="row mt-2">
							<h5 class="font-weight-bold m-2 p-0">Description: </h5>
							<textarea class="w-100" rows="5" style="resize: none;" name="inp_description" placeholder="e.g. based on [character], 2 pieces/copies, etc." maxlength="2040"></textarea>
						</div>
						<div class="row mt-2">
							<div class="col-6">
								<h5 class="font-weight-bold m-2 p-0">Type: </h5>
								<select class="w-100" name="inp_type_id">
									<?php foreach ($types as $key => $val): ?>
										<option value="<?=$key?>"><?=$val?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-6">
								<h5 class="font-weight-bold m-2 p-0">Size: </h5>
								<input class="w-100" type="text" name="inp_size" placeholder="e.g. 12cm">
							</div>
						</div>
						<div class="row mt-2">
							<div class="container">
								<input id="img_count" type="hidden" name="inp_img_count" value="0">
								<h5 class="font-weight-bold m-2 p-0">Image Reference/s: </h5>
								<div class="img_container row">
									<div class="col-3 img_box mb-3">
										<input type="file" class="d-none img_input no_img" name="inp_img_1">
										<img class="w-100 img_preview" src="<?=base_url()?>assets/img/no_img.png">
										<div class="img_change w-100 h-100 p-3 text-center d-none">
											Change Image
										</div>
										<a class="img_remove">
											<i class="fa fa-times" aria-hidden="true"></i>
										</a>
										<input type="hidden" class="img_check" name="inp_img_1_check">
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<button id="btn_show_order_details" class="btn btn-outline-dark btn-block font-weight-bold" type="button">Order Details</button>
						</div>
					</div>

					<div id="custom_order_details">
						<div class="row mt-2">
							<button id="btn_show_product_details" class="btn btn-outline-dark font-weight-bold" type="button">Back</button>
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
								<input type="submit" class="btn btn-outline-dark btn-block font-weight-bold"	 value="Place Order">
							</div>
						</div>
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
		
		$(document).on("change", ".img_input", function(t) {
			if (t.target.files && t.target.files[0]) {
				var reader = new FileReader();
				reader.readAsDataURL(t.target.files[0]);
				reader.onload = function(e) {
					$(t.target).siblings(".img_preview").attr("src", e.target.result);
				};

				$(".img_box").each(function(index, el) {
					$(this).children(".img_input").attr("name", "inp_img_" + (index + 1));
				});

				// add new imgbox
				if ($(".img_box").length < 10 && $(t.target).hasClass("no_img")) {
					$(t.target).removeClass("no_img");

					$(".img_container").append($("<div>").attr({
						class: "col-3 img_box mb-3"
					}).append($("<input>").attr({
						type: "file",
						class: "d-none img_input no_img",
						name: "inp_img_" + ($(".img_box").length + 1)
					})).append($("<img>").attr({
						class: "w-100 img_preview",
						src: "<?=base_url()?>assets/img/no_img.png"
					})).append($("<div>").attr({
						class: "img_change w-100 h-100 p-3 text-center d-none"
					}).html("Change Image")).append($("<a>").attr({
						class: "img_remove"
					}).append($("<i>").attr({ class: "fa fa-times", "aria-hidden": "true" }))));
					
					$("#img_count").val($(".img_box").length);
				}
			}
		});

		$(document).on("click", ".img_remove", function(t) {
			if ($(".img_box").length > 1 && !$(this).siblings(".img_input").hasClass("no_img")) {
				$(this).parent().remove();
			}
			$(".img_box").each(function(index, el) {
				$(this).children(".img_input").attr("name", "inp_img_" + (index + 1));
			});
		});

		$("#custom_order_details").hide();
		$("#btn_show_order_details").on("click", function(e) {
			$("#custom_product_details").hide("fast");
			$("#custom_order_details").show("fast");
		});
		$("#btn_show_product_details").on("click", function(e) {
			$("#custom_order_details").hide("fast");
			$("#custom_product_details").show("fast");
		});
	});
</script>
</html>