<div id="page-wrapper" style="min-height: 489px;">


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li class="" data-target="#myCarousel" data-slide-to="1"></li>
			<li class="" data-target="#myCarousel" data-slide-to="2"></li>
			<li class="" data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner " role="listbox">
			<div class="item active palette-background-blue" ">
				
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['ByState']?></h1>
						<p><?php echo $translations['ByStateText']?></p>

					</div>
				</div>
			</div>
			<div class="item palette-background-green">
				
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['ByParty']?></h1>
						<p><?php echo $translations['ByPartyText']?></p>
						<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
					</div>
				</div>
			</div>
			<div class="item palette-background-red">
				
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['TopTen']?></h1>
						<p><?php echo $translations['TopTenText']?></p>

					</div>
				</div>
			</div>
			<div class="item palette-background-yellow">
				
				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['ByAgeGender']?></h1>
						<p><?php echo $translations['ByAgeGenderText']?></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
			aria-hidden="true"></span> <span class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#myCarousel"
			role="button" data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	
		<div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
			<div class="row">
				<h2 class="text-center text-danger"><?php echo $translations['SiteOnDevelopment']?> </h2>
			</div>
			<div class="row " >


				<center>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " style="padding: 50px;">
						<center>
							<span class="label label-blue label-circle-huge " > <i
								class="fa fa-line-chart "> </i>
							</span>

							<h3 style="margin-top: 40px;"><?php echo $translations['ByParty']?></h3>
							<p><?php echo $translations['ByPartyText2']?></p>
						</center>
					</div>


					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " style="padding: 50px;">
						<center>
							<span class="label label-yellow label-circle-huge"> <i
								class="fa fa-bar-chart "> </i>
							</span>
							<h3 style="margin-top: 40px;"><?php echo $translations['ByState']?></h3>
							<p><?php echo $translations['ByStateText2']?></p>
						</center>
					</div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " style="padding: 50px;">
						<center>
							<span class="label label-red label-circle-huge"> <i
								class="fa fa-star "> </i>
							</span>
						</center>

						<h3 style="margin-top: 40px;"><?php echo $translations['TopTen']?></h3>
						<p><?php echo $translations['TopTenText2']?></p>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " style="padding: 50px;">
						<center>
							<span class="label label-green label-circle-huge"> <i
								class="fa fa-heart "> </i>
							</span>
						</center>

						<h3 style="margin-top: 40px;"><?php echo $translations['Popularity']?></h3>
						<p><?php echo $translations['PopularityText']?></p>
					</div>
				</center>
				
			</div>
			
		</div>
	
</div>



