
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
		<?php if ($this->session->has_userdata("user_name")): ?>
			<div class="row mt-5 pt-5">
				<div class="col-sm-12">
					<div class="text-center">
						<span class="font-weight-bold">
							<h2>Welcome <?=$this->session->userdata("user_name")?>!</h2>
						</span>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="row mt-5">
			<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="img-fluid d-block w-100" src="<?=base_url()?>assets/img/sample1.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="img-fluid d-block w-100" src="<?=base_url()?>assets/img/sample2.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="img-fluid d-block w-100" src="<?=base_url()?>assets/img/sample3.jpg" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<div class="row mt-5 p-4" style="border: 1px solid #000;">
			<div class="col-2"></div>
			<div class="col-8">
				<?php foreach ($tbl_types->result_array() as $key => $row): ?>
					<div class="row mb-4">
						<?php if ($key % 2 == 0): ?>
							<div class="col-md-6 col-sm-6 col-xs-6 marginslim p-2 text-right">
								<span class="font-weight-bold" style="font-size: 20px;"><?=$row["name"]?></span>
								<div class="row mt-4">
									<div class="col-md-12 marginslim ml-2">
										<span class="font-italic"><?=$row["description"]?></span><br>
										<span class="font-weight-bold">PHP <?=$row["price_range"]?></span>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<div class="col-md-5 col-sm-5 col-xs-5 marginslim">
							<img class="img-fluid" src="<?php
							if (!empty($row["img"])) {
								echo base_url(). 'assets/img/featured/type_'. $row["type_id"] .'/'. explode("/", $row["img"])[0];
							} else {
								echo base_url(). "assets/img/no_img.png";
							}
							?>">
						</div>
						<?php if ($key % 2 == 1): ?>
							<div class="col-md-6 col-sm-6 col-xs-6 marginslim p-2">
								<span class="font-weight-bold" style="font-size: 20px;"><?=$row["name"]?></span>
								<div class="row mt-4">
									<div class="col-md-12 marginslim ml-2">
										<span class="font-italic"><?=$row["description"]?></span><br>
										<span class="font-weight-bold">PHP <?=$row["price_range"]?></span>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-2"></div>
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