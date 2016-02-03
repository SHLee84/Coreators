	<?php 
	session_start();
	//$_SESSION["username"] = "Coreators";
	?>
	<nav>
		<ul class="side_menu">
			<li><a href="coreator-of-the-month/">blog</a></li>
			<li><a class="scroll" href="#about">About</a></li>
			<!-- <li><a class="scroll" href="#people">People</a></li> -->
			<li><a class="scroll" href="#contact">Contact</a></li>
		</ul>
		<hr />
	<?php if (isset($_SESSION["uname"]) && $_SESSION["uname"] != "") { ?>
		<ul class="side_menu">
			<li><a><small>Logged in as <?php echo $_SESSION["uname"]; ?></small></a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<?php } else { ?>
		<ul class="side_menu login">
			<li><a class="scroll" data-toggle="modal" data-target="#loginModal">Log In</a></li>
		</ul>
		<?php } ?>
	</nav>