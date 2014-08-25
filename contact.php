<?php 
$pageTitle = "Home";
$section = "contact";
include("inc/header.php");
include("inc/index-nav.php"); ?>

	<!-- Begin Contact -->
	<section id="section6">

		<div class="contact">

			<div class="container">

				<div class="col-md-12 page-title contact-header">
					<h3>Contact</h3>
				</div>


				<div class="row" >

				<?php 
				if($_GET["status"] == "thanks") { ?>

					<div class="col-md-12 thanks-message">
						<h1><i class="ion-ios7-paperplane"></i></h1>
						<h2>Thanks for your message.</h2>
						
					</div>
					
				<?php } else { ?>

					<?php if($_GET["status"] == "wrong") { ?>


				<div class="row">
					<div class="col-md-6 col-md-offset-3">

						<div class="alert alert-danger" role="alert">
							Sorry please make sure you have entered your details correctly.
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9 col-md-offset-3">

				
							<!-- Form -->
							<form id="defaultForm" name="contactform" method="post" action="php/mailer.php" class="form-horizontal" role="form">

								<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
			                            <div class="col-lg-8">
			                               	<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Full Name"/>
			                            </div>
			                            
			                        </div>

			                        <div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">

			                            <div class="col-lg-8">
			                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="email"/>
			                            </div>
			                        </div>

			                      
			                        	<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
											<div class="col-md-8">
												<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject" data-required="true">
											</div>
										</div>
										<div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">
											<div class="col-lg-8">
												<textarea class="form-control form-control-message" rows="5" id="inputMessage" name="inputMessage" placeholder="Message"></textarea>
											</div>
										</div>
									<div data-scroll-reveal="enter top and move 50px over 1.7s" class="form-group">
										<div class="col-lg-2 ">
											<button type="submit" class="btn btn-default bolt-button-send">
												Send
											</button>
										</div>
									
									</div>

							</form>

						</div>
					</div>


				<?php } else { ?>

					<div class="row">
						<div class="col-md-8 col-md-offset-3">
					
							<!-- Form -->
							<form id="defaultForm" name="contactform" method="post" action="php/mailer.php" class="form-horizontal" role="form">

								<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
			                            <div class="col-lg-8">
			                               	<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Full Name"/>
			                            </div>
			                            
			                        </div>

			                        <div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">

			                            <div class="col-lg-8">
			                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="email"/>
			                            </div>
			                        </div>

			                      
			                        	<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
											<div class="col-md-8">
												<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject" data-required="true">
											</div>
										</div>
										<div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">
											<div class="col-lg-8">
												<textarea class="form-control form-control-message" rows="5" id="inputMessage" name="inputMessage" placeholder="Message"></textarea>
											</div>
										</div>
									<div data-scroll-reveal="enter top and move 50px over 1.7s" class="form-group">
										<div class="col-lg-2 ">
											<button type="submit" class="btn btn-default bolt-button-send">
												Send
											</button>
										</div>
									
									</div>

							</form>

						</div>
					</div>

				<?php } ?>
				<?php } ?>

			</div> <!-- end of container -->


				<div class="row addresses" data-scroll-reveal="enter bottom and move 50px over 1.5s">
					<div class="col-md-6">
						<div class="panel panel-default">
						  <div class="panel-heading">HONG KONG:</div>
						  <div class="panel-body">
						    UNIT 413, MANHATTAN CENTRE,<br>
											8-15 KWAI CHEONG ROAD, <br>
											KWAI CHUNG,<br>
											HONG KONG
						  </div>			
						</div>
					</div>
					<div class="col-md-6" data-scroll-reveal="enter bottom and move 50px over 2s">
						<div class="panel panel-default">
						  <div class="panel-heading">SINGAPORE:</div>
							  <div class="panel-body">
							    67, AYER RAJAH CRESCENT,<br>
												#04-09,<br>
												AYER RAJAH INDUSTRIAL ESTATE,<br>
												SINGAPORE 139950.
							  </div>			
						</div>
					
					</div>
				</div> <!-- end of addresses div -->


		</div> <!-- end container  -->

	</div> <!-- end contact div -->

	</section>
	<!-- End Contact -->

<?php include('inc/footer.php'); ?>