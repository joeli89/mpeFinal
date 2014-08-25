
		<!-- Begin Navigation -->
	<div class="navbar navbar-fixed-top">

		<div class="container">

			<div class="navbar-header">


					<div class="logo">
				  	  <a class="navbar-brand" href="index.php"><img src="img/logo/logo1.png" class="img-responsive"></a>
					</div>

				<!-- Mobile Navigation -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="ion-navicon toggle-icon" style="font: 50px;"></span>
				</button>

			</div>

			<!-- Main Navigation -->
			<nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li class='<?php if($section == "index"){echo "on";} ?>'><a href="index.php">Home</a></li>
					<li class='<?php if($section == "company"){echo "on";} ?>'><a href="company.php">Company</a></li>
					<li class='<?php if($section == "products"){echo "on";} ?>'><a href="products.php">Products</a></li>
<!-- 					<li class='<?php if($section == "technology"){echo "on";} ?>'><a href="technology.php">Technology</a></li> -->
					<li class='<?php if($section == "contact"){echo "on";} ?>'><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>