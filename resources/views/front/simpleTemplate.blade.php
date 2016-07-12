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
							<li class="pull-left"><h3><i class="fa fa-buysellads"></i><strong>PP</strong><span>in</span><i class="fa fa-buysellads"></i><strong>IR</strong></h3></li>
							<li {!! classActivePath('/') !!}>
								{!! link_to('/', trans('front/site.home'), ['class'=>'button special fit small']) !!}
							</li>
							<li><a href="#" class="button special fit small">Getting Started</a></li>
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
		<section id="navinfo">
			<div class="inner">
				@yield('navinfo')
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

		@yield('comment')

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
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