
<?php 

/*For testing purposes only*/
if (ENVIRONMENT == 'development'){
	$user['FirstName']= 'Developer';
	
}


?>
<!-- Page Content -->
<div id="page-wrapper" style="min-height: 489px;">

	<div class="row">

		<div class="col-xs-12 col-md-4">
			<div class="thumbnail">
				<img class="img-responsive img-thumbnail"
					src="<?php echo get_media_path('images/politician_pictures', $politicianProfile['PoliticianPicturePath'], 'jpg');?>"
					alt="" style="width: 300px; height: 300px; padding: 10px">
				<div class="caption-full">
					<h4><?php echo $translations['GeneralApproval']?></h4>
					<input id="input-1" class="rating" data-min="0" data-max="100"
						data-size="sm" data-step="10"
						value="<?php echo $politicianProfile['ScoreAvg']*100?>"
						data-default-caption="<?php echo $politicianProfile['ScoreAvg']*100?> %" data-readonly="true">

					<h5>
						<strong><?php echo $translations['NrVoters']?></strong> <?php echo $politicianProfile['NrVoters']?>
					</h5>
					<h4>
						<a href="#"><?php echo $politicianProfile['FirstName'].' '.$politicianProfile['LastName']   ?></a>
					</h4>
					<h4>
						<strong><?php echo $politicianProfile['TypeName']  ?></strong>
					</h4>
					<h4><?php echo $politicianProfile['PartyName']   ?></h4>
					<h5>
						<strong><?php echo $politicianProfile['RegionName']   ?></strong>
					</h5>

				</div>
				<div class="ratings" style="padding: 10px">
					<h4><?php echo $user['FirstName'] ?></h4>
					 <?php
						/*
						 * $attributes = array('class' => 'rating', 'id' => 'input-2', 'name' => 'userrating', 'data-min'=> '0','data-max'=>'5',
						 * 'data-size'=>'sm', 'data-step'=>'.5', 'data-default-caption'=>'{rating} Stars', 'value'=> strval($politicianScore['Score']*5));
						 * echo form_open("mb_politician_info/submit_score", $attributes);
						 */
						
						$attributes = array (
								"class" => "form-horizontal",
								"id" => "scoreform",
								"name" => "scoreform" 
						);
						echo form_open ( "mb_politician_info/submit_score", $attributes );
						
						?>
					 <input id="input-2" class="rating" data-min="0" data-max="100"
						data-size="sm" data-step="10"
						data-default-caption="{rating} %" name="userrating"
						value=<?php echo $politicianScore['Score']*100; ?>   		
						<?php 
						if ($user['FirstName']=='Invitado' or $user['FirstName']=='Guest') 
				        echo ' data-readonly="true"';
						?> >

					<button type="submit" 
					class=
					"btn btn-primary 
					<?php 
					if ($user['FirstName']=='Invitado' or $user['FirstName']=='Guest' ) 
				    echo 'disabled';
                    ?> "
                    ><?php echo $translations['Vote']?></button>

					<button type="reset" class="btn btn-default
					<?php 
					if ($user['FirstName']=='Invitado' or  $user['FirstName']=='Guest') 
				    echo 'disabled';
                    ?> "
					"><?php echo $translations['Erase']?></button>
                       
				 <?php echo form_close(); ?>
					
	
				</div>
			</div>

		</div>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#Resumen"><?php echo $translations['Summary']?></a></li>
				<li><a data-toggle="tab" href="#Aprobacion"><?php echo $translations['Approval']?></a></li>
				<li><a data-toggle="tab" href="#Noticias"><?php echo $translations['News']?></a></li>
				<li><a data-toggle="tab" href="#Social"><?php echo $translations['Social']?></a></li>
			</ul>

			<div class="tab-content">
				<div id="Resumen" class="tab-pane fade in active">
<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-6 col-lg-3">

						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="row">
									<div class="text-center">
										<div class="huge"><?php    echo $politicianSummary['ranking']['rank'];?></div>
										<div class="text-center"><?php    echo $politicianSummary['ranking']['NrVoters'];?> <?php echo $translations['Votes']?></div>
									</div>
								</div>
							</div>

							<div class="panel-footer">
								<div class="text-center">
									<h4>
										<strong><?php echo $translations['Ranking']?></strong>
									</h4>
								</div>
								<div class="text-center"><?php echo $translations['Current']?></div>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					
					
					<div class="col-xs-6 col-sm-4 col-md-6 col-lg-3">

						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="text-center">
										<div class="huge"><?php    echo $politicianSummary['minScore']['ScoreAvg']*100;?>%</div>
										<div class="text-center"><?php    echo $politicianSummary['minScore']['NrVoters'];?> <?php echo $translations['Votes']?></div>
									</div>
								</div>
							</div>

							<div class="panel-footer">
								<div class="text-center">
									<h4>
										<strong><?php echo $translations['Minimum']?></strong>
									</h4>
								</div>
								<div class="text-center"><?php    echo$politicianSummary['minScore']['Date']?></div>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-6 col-lg-3">

						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="text-center">
										<div class="huge"><?php    echo $politicianSummary['maxScore']['ScoreAvg']*100;?>%</div>
										<div class="text-center"><?php    echo $politicianSummary['maxScore']['NrVoters'];?> <?php echo $translations['Votes']?></div>
									</div>
								</div>
							</div>

							<div class="panel-footer">
								<div class="text-center">
									<h4>
										<strong><?php echo $translations['Maximum']?></strong>
									</h4>
								</div>
								<div class="text-center"><?php    echo$politicianSummary['maxScore']['Date']?></div>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>

</div>

<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-6 col-lg-3">

						<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
								<div class="col-xs-2">
                                    <i class="fa fa-female fa-3x"></i>
                                </div>
									<div class="text-center">
										<div class="huge"><?php    
										 if (isset($politicianSummary['gbg']['0']['ScoreAvg']))
										 { 
										 	if ($politicianSummary['gbg']['0']['Gender'] == 'female')
										 	echo $politicianSummary['gbg']['0']['ScoreAvg']*100;
										 }
										   if (isset($politicianSummary['gbg']['1']['ScoreAvg']))
										 { 
										 	if ($politicianSummary['gbg']['1']['Gender'] == 'female')
										 	echo $politicianSummary['gbg']['1']['ScoreAvg']*100;
										 }
										 ?>%</div>
										<div class="text-center"><?php    
										if (isset($politicianSummary['gbg']['0']['NrVoters']))
										{
											if ($politicianSummary['gbg']['0']['Gender'] == 'female')
												echo $politicianSummary['gbg']['0']['NrVoters'];
										}
										  if (isset($politicianSummary['gbg']['1']['NrVoters']))
										{
											if ($politicianSummary['gbg']['1']['Gender'] == 'female')
												echo $politicianSummary['gbg']['0']['NrVoters'];
										}
										
										
										
										?> <?php echo $translations['Votes']?></div>
									</div>
								</div>
							</div>

							<div class="panel-footer">
								<div class="text-center">
									<h4>
										<strong><?php echo $translations['FemApproval']?></strong>
									</h4>
								</div>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					
					<div class="col-xs-6 col-sm-4 col-md-6 col-lg-3">

						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
								<div class="col-xs-2">
                                    <i class="fa fa-male fa-3x"></i>
                                </div>
									<div class="text-center">
										<div class="huge"><?php  
										
										if (isset($politicianSummary['gbg']['0']['ScoreAvg']))
										{
											if ($politicianSummary['gbg']['0']['Gender'] == 'male')
												echo $politicianSummary['gbg']['0']['ScoreAvg']*100;
										}
										 if (isset($politicianSummary['gbg']['1']['ScoreAvg']))
										{
											if ($politicianSummary['gbg']['1']['Gender'] == 'male')
												echo $politicianSummary['gbg']['1']['ScoreAvg']*100;
										}
										
										
										?>%</div>
										<div class="text-center"><?php   
										
										
										if (isset($politicianSummary['gbg']['0']['NrVoters']))
										{
											if ($politicianSummary['gbg']['0']['Gender'] == 'male')
												echo $politicianSummary['gbg']['0']['NrVoters'];
										}
										if (isset($politicianSummary['gbg']['1']['NrVoters']))
										{
											if ($politicianSummary['gbg']['1']['Gender'] == 'male')
												echo $politicianSummary['gbg']['1']['NrVoters'];
										}
										
										
										?> <?php echo $translations['Votes']?></div>
									</div>
								</div>
							</div>

							<div class="panel-footer">
								<div class="text-center">
									<h4>
										<strong><?php echo $translations['MaleApproval']?></strong>
									</h4>
								</div>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
</div>

				</div>



				<div id="Aprobacion" class="tab-pane fade">
					<div class="panel panel-default">
						<div class="panel-heading"><?php echo $translations['HistoricalApproval']?></div>
						<!-- /.panel-heading -->

						<div class="panel-body">

				 <?php
					
					foreach ( $politicianHistoricScoreAvg as $row ) {
						$dataset1 [] = array (
								strtotime ( $row ['Date'] ) * 1000,
								( float ) $row ['ScoreAvg'] * 100 
						);
					}
					foreach ( $politicianHistoricScoreUser as $row ) {
						$dataset2 [] = array (
								strtotime ( $row ['TimeStamp'] ) * 1000,
								( float ) $row ['Score'] * 100 
						);
					}
					
					?>
					<div class="flot-chart">
								<div class="flot-chart-content" id="flot-line-chart"></div>
							</div>
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->

				</div>
				<div id="Noticias" class="tab-pane fade">
					<div class="panel panel-default">
						<div class="panel-body">

							<button type="button"
								class="btn btn-primary btn-circle btnToggle ">
								<i class="fa  fa-step-forward"></i>
							</button>
							<button type="button" class="btn btn-success btn-circle btnUp ">
								<i class="fa  fa-chevron-up "></i>
							</button>
							<button type="button" class="btn btn-info btn-circle btnDown ">
								<i class="fa  fa-chevron-down "></i>
							</button>


							<div class="news news-panel">
								<ul>
								<?php
								// echo var_dump ($news);
								foreach ( $news as $unitNews ) {
									echo '<li>';
									echo '<img src="' . $unitNews ['image'] . '"  />';
									echo '<a href="' . $unitNews ['link'] . '" target="_blank"><h4>' . $unitNews ['title'] . '</h4></a>';
									echo '<p>' . $unitNews ['shortStory'] . '</p>';
									
									echo '<p class= "text-info date-source">' . $unitNews ['newsSource'] . '</p>';
									echo '<p class= "text-success date-source">' . $unitNews ['pubDate'] . '</p>';
									echo '</li>';
								}
								?>

								</ul>
							</div>






						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.tab-pane -->



				<div id="Social" class="tab-pane fade">
					<div class="col-md-6">
						<div class="panel panel-default custom-panel">

							<div class="panel-body">
								<h4 class="text-info">
									<strong><?php echo $translations['OwnTweets']?></strong>
								</h4>
								<button type="button"
									class="btn btn-primary btn-circle btnUserTweetsToggle ">
									<i class="fa  fa-step-forward"></i>
								</button>
								<button type="button"
									class="btn btn-success btn-circle btnUserTweetsUp ">
									<i class="fa  fa-chevron-up "></i>
								</button>
								<button type="button"
									class="btn btn-info btn-circle btnUserTweetsDown ">
									<i class="fa  fa-chevron-down "></i>
								</button>


								<div class="user-tweets tweets-panel">
									<ul>
								<?php
									// echo var_dump ($news);
								foreach ( $userTweets  as $userTweet ) {
									echo '<li>';
									echo '<img src="' . $userTweet ['user'] ['profile_image_url'] . '"  />';
									echo '<p class= "text-info"><strong>' . $userTweet ['user'] ['name'] . '</strong></p>';
									echo '<p>' . $userTweet ['text'] . '</p>';
									//echo '<p>' . var_dump($userTweet). '</p>';
									echo '<p class= "text-info date-source">@' . $userTweet ['user'] ['screen_name'] . ' - ' . $userTweet ['created_at'] . '</p>';
									// echo '<p class= "text-success date-source">' . $tweet['created_at'] . '</p>';
									echo '</li>';
								}
								?>

								</ul>
								</div>


							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<div class="col-md-6">
						<div class="panel panel-default custom-panel">
							<div class="panel-body">
								<h4 class="text-success">
									<strong><?php echo $translations['Mentions']?></strong>
								</h4>
								<button type="button"
									class="btn btn-primary btn-circle btnTweetsToggle ">
									<i class="fa  fa-step-forward"></i>
								</button>
								<button type="button"
									class="btn btn-success btn-circle btnTweetsUp ">
									<i class="fa  fa-chevron-up "></i>
								</button>
								<button type="button"
									class="btn btn-info btn-circle btnTweetsDown ">
									<i class="fa  fa-chevron-down "></i>
								</button>


								<div class="tweets tweets-panel">
									<ul>
								<?php
									// echo var_dump ($news);
								foreach ( $tweets ['statuses'] as $tweet ) {
									echo '<li>';
									echo '<img src="' . $tweet ['user'] ['profile_image_url'] . '"  />';
									echo '<p class= "text-info"><strong>' . $tweet ['user'] ['name'] . '</strong></p>';
									echo '<p>' . $tweet ['text'] . '</p>';
									
									echo '<p class= "text-info date-source">@' . $tweet ['user'] ['screen_name'] . ' - ' . $tweet ['created_at'] . '</p>';
									// echo '<p class= "text-success date-source">' . $tweet['created_at'] . '</p>';
									echo '</li>';
								}
								?>

								</ul>
								</div>


							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
				</div>
				<!-- /.tab-pane -->





			</div>

		</div>

	</div>
</div>

<script type="text/javascript">
   
	var politicianhistoricscoreavg = <?php echo json_encode($dataset1); ?>;
	var politicianhistoricscoreuser = <?php  if ($this->session->userId == null)  echo json_encode( 0); else echo json_encode($dataset2); ?>;
</script>
<!-- /.container -->





