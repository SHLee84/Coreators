<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<form id="loginform" class="form-horizontal" role="form" method="post" action="authenticate.php">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group form-group-lg">
									<input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required />
									<br />
								</div>
								<div class="form-group form-group-lg">
									<input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
									<br />
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group form-group-lg">
									<button type="submit" class="form-control">Log In</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>