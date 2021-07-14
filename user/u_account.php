
<?php
$template_header;
?>

<body class="" style="background-color: rgba(241, 182, 171, 1);">
	<?php $this->load->view("user/template/u_t_navbar"); ?>
	<div class="container px-5 rounded pb-5" style="background-color: rgba(220, 138, 107, 0.40);">
		<?php if ($this->session->flashdata("notice")): ?>
			<?php $alert = $this->session->flashdata("notice"); ?>
			<div class="alert alert-<?=$alert[0]?> alert-dismissible">
				<?=$alert[1]?>
				<button type="button" class="close" data-dismiss="alert">
					&times;
				</button>
			</div>
		<?php endif; ?>
		<div class="row">
			<span>
				<h4 class="m-0" style="padding-top: 60px;">
					Account Details <a href="account_details"><i class="fa fa-pencil p-1" aria-hidden="true"></i></a>
				</h4>
			</span>
		</div>
		<div class="row mt-5">
			<div class="col-9">
				<div class="row mt-2">
					<div class="col-3">
						<h5 class="font-weight-normal m-0 p-0">Full Name: </h5>
					</div>
					<div class="col-9">
						<?=$account_details["name_last"] .", ". $account_details["name_first"] ." ". $account_details["name_middle"] ." ". $account_details["name_extension"]?>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-3">
						<h5 class="font-weight-normal m-0 p-0">Email: </h5>
					</div>
					<div class="col-9">
						<?=$account_details["email"]?>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-3">
						<h5 class="font-weight-normal m-0 p-0">Gender: </h5>
					</div>
					<div class="col-9">
						<?=$account_details["gender"]?>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-3">
						<h5 class="font-weight-normal m-0 p-0">Address: </h5>
					</div>
					<div class="col-9">
						<?=$account_details["zip_code"] ." / ". $account_details["country"] ." / ". $account_details["province"] ." / ". $account_details["city"] ." / ". $account_details["street"] ." / ". $account_details["address"]?>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-3">
						<h5 class="font-weight-normal m-0 p-0">Contact Num: </h5>
					</div>
					<div class="col-9">
						<?=$account_details["contact_num"]?>
					</div>
				</div>
			</div>
			<div class="col-3">
				<h3>My Orders</h3>
				<a class="btn btn-primary mt-1" href="my_orders">ALL (<?=array_sum($order_state_counts)?>)</a><br>
				<a class="btn btn-primary mt-1" href="my_orders?state=0"><?=$states[0]?> (<?=$order_state_counts["0"]?>)</a><br>
				<a class="btn btn-primary mt-1" href="my_orders?state=1"><?=$states[1]?> (<?=$order_state_counts["1"]?>)</a><br>
				<a class="btn btn-primary mt-1" href="my_orders?state=2"><?=$states[2]?> (<?=$order_state_counts["2"]?>)</a><br>
				<a class="btn btn-primary mt-1" href="my_orders?state=3"><?=$states[3]?> (<?=$order_state_counts["3"]?>)</a><br>
				<a class="btn btn-primary mt-1" href="my_orders?state=4"><?=$states[4]?> (<?=$order_state_counts["4"]?>)</a><br>
				<a class="btn btn-primary mt-1" href="my_orders?state=5"><?=$states[5]?> (<?=$order_state_counts["5"]?>)</a><br>
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