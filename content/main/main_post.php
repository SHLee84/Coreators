<?php		if ($res->num_rows > 0) {
				// output data of each row
				while($post = $res->fetch_assoc()) { ?>
				<?php if ($post["status"] == 1) { ?>
					<seciton id="<?php echo $post["anchor"]; ?>">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
									<br /><br /><br /><br />
									<h1><?php echo $post["title"]; ?>
									<?php echo isset($_SESSION["uname"]) ? '<span class="pull-right"><button class="btn btn-sm btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span></h1>' : ''; ?>
									<?php echo $post["content"]; ?>
								</div>
							</div>
						</div>
					</seciton>
			<?php 	include("content/includes/divider.php"); ?>
			<?php } else if($post["status"] == 0 && isset($_SESSION["uname"])) { ?>
					<seciton id="<?php echo $post["anchor"]; ?>">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
									<br /><br /><br /><br />
									<div class="well well-sm"><?php echo $post["title"]; ?>&nbsp;&nbsp;&nbsp;<small><i>hidden</i></small><span class="pull-right"><button class="btn btn-sm btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span></div>
								</div>
							</div>
						</div>
					</seciton>
			<?php }
				}
			}
?>