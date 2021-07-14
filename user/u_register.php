
<?php
$template_header;
?>

<body class="" style="background-color: rgba(241, 182, 171, 1);">
	<?php $this->load->view("user/template/u_t_navbar"); ?>
	<div class="container px-5 rounded pb-5" style="background-color: rgba(220, 138, 107, 0.40);">
		<span>
			<h1 class="m-0" style="padding-top: 60px;">Register</h1>
		</span>
		<div class="row mt-5">
			<div class="col-3"></div> 
			<div class="col-6">
				<?=form_open(base_url() . "register_account", "method='POST'")?>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Last Name: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_name_last" placeholder="Last Name" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">First Name: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_name_first" placeholder="First Name" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Middle Name: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_name_middle" placeholder="Middle Name" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Name Extension: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_name_extension" placeholder="e.g. Jr., Sr., etc." autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Email: </h5>
						</div>
						<div class="col-9">
							<input type="email" name="inp_email" placeholder="Email Address" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Password: </h5>
						</div>
						<div class="col-9">
							<input type="password" name="inp_password" placeholder="Password" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Gender: </h5>
						</div>
						<div class="col-9">
							<select name="inp_gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
							</select>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Zip Code: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_zip_code" placeholder="Zip Code" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Country: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_country" placeholder="Country" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Province: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_province" placeholder="Province" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">City: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_city" placeholder="City" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Street/Road: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_street" placeholder="Street/Road" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">House Number/Floor/Bldg./etc.: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_address" placeholder="Address" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<h5 class="font-weight-normal m-0 p-0">Contact Num: </h5>
						</div>
						<div class="col-9">
							<input type="text" name="inp_contact_num" placeholder="Contact #" autocomplete="off">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-12">
							<input type="submit" value="Register">
						</div>
					</div>
				<?=form_close()?>
				<a href="register">Log-In</a>
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
</html>