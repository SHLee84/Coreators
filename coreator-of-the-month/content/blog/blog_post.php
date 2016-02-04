<?php
			// output data of each row
			while($post = $res->fetch_assoc()) { 
				if ($post["status"] == 1) { ?>
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
								<br /><br /><br /><br />
								<h1><?php echo $post["title"]; ?></h1>
								<img src="<?php echo BASE_ADDRESS . IMG_F . $post["cover"]; ?>" class="img-responsive" /><br /><br />
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="<?php echo $post["video"]; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
								<p><br /><br /><?php echo $post["content"]; ?></p>
								<hr width="100%" />
								<p>
									The Coreator of the Month series is one of our marketing projects where we interview established Korean-Canadian artists in their respective fields and write an article (both video and text included) to capture their story as an inspiration for the younger generation of Korean-Canadian community that is interested in arts or any creative pursuits.
								</p>
								<p>
									Interviewer: <i>Jiwon Chun, Seowon Bang, Sejin Do</i>
								</p>
							</div>
						</div>
					</div>
		<?php	
				}
			}
			?>