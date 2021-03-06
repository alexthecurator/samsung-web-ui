<!DOCTYPE html>
<html>
<head>
	<title>Samsung</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	<!-- Navbar	 -->
	<nav class="navbar navbar-expand-lg fixed-top">
	  <div class="container-fluid">
	    <a class="navbar-brand px-3" href="#">
	    	<img src="assets/samsung-lg.svg" style="width: 100px;" />
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Features</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Pricing</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Learn more</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!--landing-->
	<div class="section gradient-bg">
		<div class="overlay"></div>
		<div class="d-flex flex-row">
			<div class="col-md-6 col-12">
				<!-- Rotating wheel -->
				<div class="wheel" id="wheel">
					<div class="Features">
						<ul class="featuresMenu">
							<li class="featureList">
								<div class="d-flex flex-row battery">
									<div class="p-2">
										<div class="featureImg transform-battery">
											<?php echo file_get_contents('assets/battery.svg') ?>
										</div>
									</div>
									<div class="p-2">
										<div class="detailTitle">
											<h5>Battery</h5>
										</div>
										<div class="detailDetails">
											Exynos 2100
											<div class="microDetails">
												<small>2.9GHz Single-core (Cortex®-X1)</small>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="featureList">
								<div class="d-flex flex-row processor">
									<div class="p-2">
										<div class="featureImg">
											<?php echo file_get_contents('assets/cpu.svg') ?>
										</div>
									</div>
									<div class="p-2">
										<div class="detailTitle">
											<h5>Processor</h5>
										</div>
										<div class="detailDetails">
											Exynos 2100
											<div class="microDetails">
												<small>2.9GHz Single-core (Cortex®-X1)</small>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="featureList">
								<div class="d-flex flex-row screen">
									<div class="p-2">
										<div class="featureImg">
											<?php echo file_get_contents('assets/screen.svg') ?>
										</div>
									</div>
									<div class="p-2">
										<div class="detailTitle">
											<h5>Screen</h5>
										</div>
										<div class="detailDetails">
											Exynos 2100
											<div class="microDetails">
												<small>2.9GHz Single-core (Cortex®-X1)</small>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="featureList">
								<div class="d-flex flex-row network">
									<div class="p-2">
										<div class="featureImg">
											<?php echo file_get_contents('assets/rss.svg') ?>
										</div>
									</div>
									<div class="p-2">
										<div class="detailTitle">
											<h5>Network</h5>
										</div>
										<div class="detailDetails">
											Exynos 2100
											<div class="microDetails">
												<small>2.9GHz Single-core (Cortex®-X1)</small>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>

					</div>
				</div>
				<!-- Phone -->
				<div class="phone">
					<div class="sam-phone">
						<img class="phone-img" src="assets/samsung-galaxy.png">
					</div>
				</div>
			</div>
			<!-- Controls -->
			<div class="col-md-6 col-12 d-flex justify-content-start">
				<div class="controls">
					<!-- Up -->
					<div class="upBtn p-1">
						<image class="icon" type="image" src="./assets/up-arrow.svg" name="" id="upBtn">
					</div>
					<div class="featuresName">

						<div class="features">
							<h6>features</h6>
						</div>
						
					</div>
					<!-- Down -->
					<div class="downBtn p-1">
						<image class="icon-rot" type="image" src="./assets/up-arrow.svg" name="" id="dwnBtn">					
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="section">
		<div class="row">
			<div class="col-xl-6 co-lg-6 col-md-12 col-12">
				<!-- Phone -->
				<div class="phone">
					<div class="sam-phone">
						<img class="phone-img" src="assets/samsung-galaxy.png">
					</div>
				</div>
			</div>
			<div class="col-xl-6 co-lg-6 col-md-12 col-12">
				<div class="">
					
				</div>
			</div>
		</div>
	</div>

</body>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>