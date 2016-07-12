@extends('front.simpleTemplate')

@section('navinfo')
	<img src="{!! asset('images/cloud.png') !!}" >
	<h3>Join <strong>APPinAIR</strong>, create the future</h3>
@stop

@section('main')
	<div style="text-align: center">
		<h2 class="intro-text text-center">{{ trans('front/password.title-reset') }}</h2>
		<p>{{ trans('front/password.reset-info') }}</p>
		@if(session()->has('error'))
			@include('partials/error', ['type' => 'danger', 'message' => session('error')])
		@endif
		{!! Form::open(['url' => 'password/reset', 'method' => 'post', 'role' => 'form']) !!}

		<div style="padding-left: 30%;padding-right: 30%">
			{!! Form::hidden('token', $token) !!}
			{!! Form::control('email', 6, 'email', $errors, trans('front/password.email')) !!}
			{!! Form::control('password', 6, 'password', $errors, trans('front/password.password'), null, [trans('front/password.warning'), trans('front/password.warning-password')]) !!}
			{!! Form::control('password', 6, 'password_confirmation', $errors, trans('front/password.confirm-password')) !!}
			{!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
		</div>
		{!! Form::close() !!}
	</div>
@stop

@section('scripts')

	<script>
		$(function() { $('.badge').popover();	});
	</script>

@stop