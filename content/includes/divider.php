<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			<hr width="100%" />
			<?php if (isset($_SESSION["uname"])) { ?>
				<span class="pull-right"><button class="btn btn-default" type="buttom"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Post</a></span>
			<?php } else { ?>
				<span class="pull-right"><a class="scroll" href="#top_menu"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></span>
			<?php } ?>
		</div>
	</div>
</div>