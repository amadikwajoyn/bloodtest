<?php
include_once('head.php');

?>
<!-- banner -->
<div class="banner_w3ls w3layouts">
	<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
	</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner-info w3">
						<div class="banner-text w3l">
							<h3>WE CARE<span>ABOUT OUR PATIENTS</span></h3>
							
						</div>
					</div>
				</li>
				<li>
					<div class="banner-info w3ls">
						<div class="banner-text agileits">
							<h3>WE ARE FOCUSSED YOU<span>ROUND THE CLOCK</span></h3>
							
						</div>
					</div>
				</li>
				<li>
					<div class="banner-info agileinfo">
						<div class="banner-text wthree">
							<h3>HELPING YOU<span>LIVE YOUR HEALTHY LIFE</span></h3>
							
						</div>
					</div>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="bottom_wthree">
	<div class="col-md-6 bottom-left w3-agileits">	
		<figure class="cube-1">
			<div class="btm-hov">
				<div class="btm-wid">
					<div class="thumbs">
						<span class="rotate">
							<a href="#" class="btn">Favordel Lab</a>
						</span>
					</div>
					<div class="fill_fig">
						<span class="fill"></span>
						<span class="fill"></span>
						<span class="fill"></span>
						<span class="fill"></span>
					</div>
				</div>
			</div>
		</figure>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-6 bottom-right agileits-w3layouts">
		<div class="btm-right-grid agile">
			<h2>Providing Appropriate Health Care For Adult, Seniors and Children</h2>
			
		</div>	
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->
<!-- services -->
<div class="services_agile">
	<div class="container">
		<h3 class="title">Our Best Services</h3>
		<div class="services_right w3-agile">
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span><img src="images/icon1.png" alt=" "/></span>
				<h4>Prescription</h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p5.jpg" alt=" "/></a></div>
				
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<span><img src="images/icon2.png" alt=" "/></span>
				<h4>Blood Tests</h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p6.jpg" alt=" "/></a></div>
				
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<span><img src="images/icon3.png" alt=" "/></span>
				<h4>Scans and MRI</h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p7.jpg" alt=" "/></a></div>
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->

<!-- care -->
<div class="care_agileits">
	<div class="container">
		<div class="offer agile">
			<h3>Offering the full spectrum of new treatments</h3>
			<h4>Exquisite Services 24/7</h4>
			<ul>
				<li>
					<div class="offer-left w3-agile">
						<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-education"></a>
						</div>
					</div>
					<div class="offer-right agileits-w3layouts">
						<p>Expert Physicians</p>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="offer-left w3-agileits">
						<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-scissors"></a>
						</div>
					</div>
					<div class="offer-right wthree">
						<p>Operations and Surgeries</p>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="offer-left agileinfo">
						<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-plus"></a>
						</div>
					</div>
					<div class="offer-right agileits">
						<p>Doctors Without Borders</p>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //care -->
<div class="features_w3 agileits">
	<div class="container">
		<h3 class="title">Our Features</h3>
		<div class="fea_grids w3ls">
			<div class="col-md-6 fea_grid1">
				<div class="col-sm-4 fea_left text-center w3ls">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="images/icon1.png" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="col-sm-8 fea_right agileinfo">
					<h4>Prescriptions</h4>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 fea_grid2">
				<div class="col-sm-8 fea_right fea_two w3-agileits">
					<h4>Blood Pallete Analysis</h4>
					
				</div>
				<div class="col-sm-4 fea_left fea_one text-center w3layouts">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="images/icon2.png" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 fea_grid1 fea_bor w3-agileits">
				<div class="col-sm-4 fea_left text-center">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="images/icon3.png" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="col-sm-8 fea_right agileits-w3layouts">
					<h4>MRI Scans</h4>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 fea_grid2 fea_bor w3">
				<div class="col-sm-8 fea_right fea_one w3l">
					<h4>General Physician Duties</h4>
					
				</div>
				<div class="col-sm-4 fea_left fea_two text-center w3-agileits">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="images/icon4.png" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
include_once('foot.php');

?>