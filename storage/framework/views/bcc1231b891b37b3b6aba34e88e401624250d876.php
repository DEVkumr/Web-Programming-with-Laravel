<html>
	<head>
		<title>VIT Share</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		
	</head>
	<body>
			<div class="wrapper style1">
			
			
				<div id="header">
					<div class="container">
							
						
							<h1><a href="/" >VIT SHARE</a></h1>
						
						
							<nav id="nav">
								<ul>
									<li class="active"><a href="/">Home</a></li>
									<li><a href="/news">VIT News</a></li>
									<li><a href="/events">VIT Events</a></li>
									<li><a href="http://vit.ac.in/about">About VIT</a></li>
								</ul>
							</nav>
	
					</div>
				</div>
			<div align="center" font-color='white'>
		        <h1> STUDENT'S REGISTERED </h1>
                <?php if(count($data) > 0): ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="well">
                            <a href="/data/<?php echo e($datas->id); ?>"><?php echo e($datas -> FirstName); ?> <?php echo e($datas -> LastName); ?></a>
                        </div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p> No users registered </p>
                <?php endif; ?>

            </div>

			<div class="wrapper style5">
				<section id="team" class="container">
					<header>
						<h2>CREATORS</h2>
						<span class="byline">Info about the creators and mentor.</span><br><br>
					</header>
					<div class="row" align = "center">
						<div class="row" align='center'>
						<div class="3u">
							<a href="#" class="image"><img src="images/aaditya.jpg" alt="" height="100" width="100"></a>
							<h3>Aaditya Vaidya<br>15BCB0032</h3>
							<p>Back-End</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/dev.jpg" alt="" height="100" width="100"></a>
							<h3>Dev Kumar<br>15BCB0060</h3>
							<p>Front-End</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/yash.jpg" alt="" height="100" width="100"></a>
							<h3>Yash Shah<br>15BCB0123</h3>
							<p>DataBase</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/priyag.png" alt="" height="100" width="100"></a>
							<h3>Prof. Priya G</h3>
							<p>Mentor</p>
						</div>
					</div>
				</section>
			</div>

	
		<div id="footer">
			<section class="container">
				<header class="major">
					<h2>Connect with us</h2>
					<span class="byline">Send your queries.</span>
				</header>
				<ul class="icons">
					<li><a href="facebook.com" class="fa fa-facebook">Facebook</a></li>
					<li><a href="google.com" class="fa fa-google-plus">Google</a></li>
				</ul>
				<hr />
			</section>		
		</div>

	</body>
</html>