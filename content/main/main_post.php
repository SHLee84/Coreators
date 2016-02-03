<?php		if ($res->num_rows > 0) {
				// output data of each row
				while($post = $res->fetch_assoc()) { ?>
					<seciton id="<?php echo $post["anchor"]; ?>">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
									<br /><br /><br /><br />
									<h1><?php echo $post["title"]; ?></h1>
									<?php echo $post["content"]; ?>
								</div>
							</div>
						</div>
					</seciton>
<?php			
				include("content/includes/divider.php");
				}
			}
?>