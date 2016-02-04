<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 divider">
			<hr width="100%" />
			<?php if (isset($_SESSION["uname"])) { ?>
			<center><button class="btn btn-default btn-create" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button><br /></center>
			<div class="add_main_post">
				<form id="addMainPostForm" class="form-horizontal" role="form" method="post">
					<input type="hidden" name="order" id="order" value="<?php echo $_GET["o"]; ?>" />
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" name="title" id="title" class="form-control" placeholder="Title" required />
							<br />
						</div>
						<div class="form-group">
							<input type="text" name="anchor" id="anchor" class="form-control" placeholder="Anchor" required />
							<br />
						</div>
						<div class="form-group">
							<textarea name="content" id="content" class="form-control"></textarea>
							<br />
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<button type="button" class="btn btn-default btn-submit">Publish</button>&nbsp;&nbsp;<button type="button" class="btn btn-default btn-cancel">Cancel</button>
						</div>
					</div>
				</form>
			</div>
			<?php } else { ?>
			<span class="pull-right"><a class="scroll" href="#top_menu"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></span>
			<?php } ?>
		</div>
	</div>
</div>