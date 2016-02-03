	<nav>
		<ul class="side_menu">
			<li><a href="coreator-of-the-month/">Blog</a></li>
			<?php
				connect();
				$menu_res = get_main_menu();
				if ($menu_res->num_rows > 0) {
				// output data of each row
					while($menu_item = $menu_res->fetch_assoc()) { ?>
						<li><a class="scroll" href="#<?php echo $menu_item["anchor"]; ?>"><?php echo $menu_item["anchor"]; ?></a></li>
			<?php 	}
				}
			?>
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