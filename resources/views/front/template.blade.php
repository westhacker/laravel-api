<!DOCTYPE HTML>

<html>
	<head>
		<title>APPinAIR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]>{!! HTML::script('assets/js/ie/html5shiv.js') !!}<![endif]-->
		{!! HTML::style('assets/css/main.css') !!}
		<!--[if lte IE 8]>{!! HTML::style('assets/css/ie8.css') !!}<![endif]-->
		<!--[if lte IE 9]>{!! HTML::style('assets/css/ie9.css') !!}<![endif]-->
		@yield('header')
	</head>
	<body>
	<!-- Nav -->
	<section id="nav">
		<div class="row">
			<div class="12u$ 24u$(medium) important(medium)">
				<ul class="actions small">
					<li class="pull-left" style="padding-left: 5%"><img src="{!! asset('images/icon.png') !!}" width="48px" height="32px"></li>
					<li class="pull-left" ><h3><i class="fa fa-buysellads"></i><strong>PP</strong><span>in</span><i class="fa fa-buysellads"></i><strong>IR</strong></h3></li>

					<li {!! classActivePath('/') !!}>
						{!! link_to('/', trans('front/site.home'), ['class'=>'button special fit small']) !!}
					</li>
					<li><a href="#" class="button special fit small">Docs</a></li>
					<li><a href="#" class="button special fit small">Enterprise</a></li>
					<li {!! classActiveSegment(1, ['articles', 'blog']) !!}>
						{!! link_to('articles', trans('front/site.blog'), ['class'=>'button special fit small']) !!}
					</li>
					@if(Request::is('auth/register'))
						<li class="active">
							{!! link_to('auth/register', trans('front/site.register'), ['class'=>'button special fit small']) !!}
						</li>
					@elseif(Request::is('password/email'))
						<li class="active">
							{!! link_to('password/email', trans('front/site.forget-password'), ['class'=>'button special fit small']) !!}
						</li>
					@else
						@if(session('statut') == 'visitor')
							<li {!! classActivePath('auth/login') !!}>
								{!! link_to('auth/login', trans('front/site.connection'), ['class'=>'button special fit small']) !!}
							</li>
						@else
							@if(session('statut') == 'admin')
								<li>
									{!! link_to('admin', trans('front/site.administration'), ['class'=>'button special fit small']) !!}
								</li>
							@elseif(session('statut') == 'redac')
								<li>
									{!! link_to('blog', trans('front/site.redaction'), ['class'=>'button special fit small']) !!}
								</li>
							@endif
							<li>
								{!! link_to('auth/logout', trans('front/site.logout'), ['class'=>'button special fit small']) !!}
							</li>
						@endif
					@endif
				</ul>
			</div>
		</div>
	</section>
		<!-- Header -->
			<section id="header">
				<div class="inner">
					<img src="{!! asset('images/icon.png') !!}" width="96px" height="64px">
					<h1>Hi, I'm <strong>APPinAIR</strong>, <br />a cloud application platform</h1>
					<p>APPinAIR is hybrid technology to expand web applications to mobile and desktop platforms.</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Discover</a></li>
						<li><a href="http://appinair.com:8080/web/" class="button scrolly">APP Distribution</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="container">
						@if(session()->has('ok'))
							@include('partials/error', ['type' => 'success', 'message' => session('ok')])
						@endif
						@if(isset($info))
							@include('partials/error', ['type' => 'info', 'message' => $info])
						@endif
						@yield('main')
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main style2">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<ul class="major-icons">
								<li><span class="icon style1 major fa-apple"></span></li>
								<li><span class="icon style2 major fa-android"></span></li>
								<li><span class="icon style3 major fa-windows"></span></li>
								<li><span class="icon style4 major fa-linux"></span></li>
							</ul>
						</div>
						<div class="6u$ 12u$(medium)">
							<header class="major">
								<h2>Multi-platform<br />
								both desktop and mobile</h2>
							</header>
							<p>If you have developed a web application, and you want to expand it to other mobile or desktop platforms, APPinAIR should your best choice. Taking advantage of Ionic and Electron, APPinAIR would realize a real cross-platform technology.</p>
							<p>APPinAIR allows you to use standard web technologies - HTML5, CSS3, and JavaScript for cross-platform development. Applications execute within wrappers targeted to each platform, and rely on standards-compliant API bindings to access each device's capabilities such as sensors, data, network status, etc.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main style1 special">
				<div class="container">
					<header class="major">
						<h2>Standing on the shoulders of giants</h2>
					</header>
					<p>APPinAIR will see further than others</p>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<span class="image fit"><img src="images/ionic.jpg" alt="" /></span>
							<h3>Ionic</h3>
							<p>Ionic is built to perform and behave great on the latest mobile devices. Designed with web application best practices.</p>
							<ul class="actions">
								<li><a href="{{url('blog/ionic')}}" class="button">More</a></li>
							</ul>
						</div>
						<div class="4u 12u$(medium)">
							<span class="image fit"><img src="images/electron.jpg" alt="" /></span>
							<h3>Electron</h3>
							<p>Electron uses Chromium and Node.js so you can build your app with HTML, CSS, and JavaScript.</p>
							<ul class="actions">
								<li><a href="{{url('blog/electron')}}" class="button">More</a></li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<span class="image fit"><img src="images/angular.jpg" alt="" /></span>
							<h3>AngularJS</h3>
							<p>APPinAIR builds on top of AngularJS to create a powerful SDK well-suited for building rich and robust mobile and desktop apps.</p>
							<ul class="actions">
								<li><a href="{{url('blog/angularjs')}}" class="button">More</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>Join APPinAIR?</h2>
					</header>
					<p>APPinAIR team are working hard...</p>
					<ul class="actions uniform">
						<li><a href="{{url('auth/register')}}" class="button special">Sign Up</a></li>
						<li><a href="{{url('articles')}}" class="button">Learn More</a></li>
					</ul>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="https://twitter.com/westhighest" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/bin5452" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.linkedin.com/in/wanghongbin" class="icon alt fa-linkedin"><span class="label">Linkedin</span></a></li>
					<li><a href="https://github.com/appinair" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="mailto:appinair@163.com" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; APPinAIR 2016</li><li><a href="{!! url('contact/create') !!}">Contact us</a></li>
				</ul>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>