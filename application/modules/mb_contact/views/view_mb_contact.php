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
			<div class="item active palette-background-blue"">

				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['WhatIs']?></h1>
						<p><?php echo $translations['WhatIsText2']?></p>

					</div>
				</div>
			</div>
			<div class="item palette-background-green">

				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['Politicians']?></h1>
						<p><?php echo $translations['PoliticiansText']?></p>
						<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
					</div>
				</div>
			</div>
			<div class="item palette-background-red">

				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['Statistics']?></h1>
						<p><?php echo $translations['StatisticsText']?></p>

					</div>
				</div>
			</div>
			<div class="item palette-background-yellow">

				<div class="container">
					<div class="carousel-caption">
						<h1><?php echo $translations['NewsSocial']?></h1>
						<p><?php echo $translations['NewsSocialText']?></p>
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

		<div class="row ">


			<div class="container">

				<div class="row">
					<div class="heading text-center">
						<h2 class="text-danger"><?php if(isset($mailMsg)) echo $translations['MailSent'];?></h2>
						<h2 class="text-info"><?php echo $translations['ContactUs']?></h2>
						<p><?php echo $translations['ContactUsText']?></p>
					</div>
				</div>

				<div class="row ">
		
                <?php
																$attributes = array (
																		"class" => "form-horizontal",
																		"id" => "contactform",
																		"name" => "contactform",
																		"role" => "form" 
																);
																echo form_open ( "mb_contact/send_msg", $attributes );
																// <form method="post" action="" id="contactfrm" role="form">
																?>
              

                    <div class="col-xs-12 col-sm-4 col-md-5 col-lg-6 ">
						<div class="form-group">
							<label for="name"><?php echo $translations['Name']?></label> <input
								type="text" class="form-control" name="name" id="name"
								placeholder="<?php echo $translations['Name']?>"
								title="<?php echo $translations['Name']?>">
						</div>
						<div class="form-group">
							<label for="email">Email</label> <input type="email"
								class="form-control" name="email" id="email" placeholder="Email"
								title="Email">
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<label for="comments"><?php echo $translations['Comments']?></label>
							<textarea name="comment" class="form-control" id="comments"
								cols="3" rows="5"
								placeholder="<?php echo $translations['Comment']?>"
								title="<?php echo $translations['Comment']?>"></textarea>
						</div>
						<button name="submit" type="submit" class="btn btn-lg btn-primary"
							id="submit"><?php echo $translations['Send']?></button>
						<div class="result"></div>
					</div>
                <?php echo form_close(); ?>
                
             
            </div>
			</div>

		</div>

	</div>

</div>



