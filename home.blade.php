@extends ('layouts.app')
@section ('content')
	<body class="homepage">

		
			<div class="wrapper style1">
			
			
				<div id="header">
					<div class="container">
							
						
							<h1><a href="#" id="logo">VIT SHARE</a></h1>
						
						
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
				
				<div id="banner">
					<section class="container">
						<h2>VIT Share</h2>
						<p>A better way to connect with your collegemates.</p>
					</section>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">Login</div>

								<div class="panel-body">
									<form class="form-horizontal" method="POST" action="{{ route('login') }}">
										{{ csrf_field() }}

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<label for="email" class="col-md-4 control-label">E-Mail Address</label>

											<div class="col-md-6">
												<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

												@if ($errors->has('email'))
													<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif
											</div>
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<label for="password" class="col-md-4 control-label">Password</label>

											<div class="col-md-6">
												<input id="password" type="password" class="form-control" name="password" required>

												@if ($errors->has('password'))
													<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
												@endif
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-8 col-md-offset-4">
												<button type="submit" class="btn btn-primary">
													Login
												</button>

												<a class="btn btn-link" href="{{ route('password.request') }}">
													Forgot Your Password?
												</a>
											</div>
                        				</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		
			

			<div class="wrapper style5">
				<section id="team" class="container">
					<header class="major">
						<h2>CREATORS</h2>
						<span class="byline">Info about the creators and mentor.</span>
					</header>
					<div class="row">
						<div class="3u">
							<a href="#" class="image"><img src="/images/aaditya.jpg" alt="" height="100" width="100"></a>
							<h3>Aaditya Vaidya<br>15BCB0032</h3>
							<p>Back-End</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="/images/dev.jpg" alt="" height="100" width="100"></a>
							<h3>Dev Kumar<br>15BCB0060</h3>
							<p>Front-End</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="/images/yash.jpg" alt="" height="100" width="100"></a>
							<h3>Yash Shah<br>15BCB0123</h3>
							<p>DataBase</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="/images/priyag.png" alt="" height="100" width="100"></a>
							<h3>Prof. Priya G</h3>
							<p>Mentor</p>
						</div>
					</div>
				</section>
			</div>

	
		<div id="footer">
			<section class="container">
				<header class="major">
					<h2 font-color="Black">Connect with us</h2>
					<span class="byline">Send your queries.</span>
				</header>
				<ul class="icon">
					<li class="active"><a href="facebook.com" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="google+.com" class="fa fa-google-plus"><span>Google+</span></a></li>
				</ul>
				<hr>
			</section>		
		</div>	
	</body>
@endsection