@extends('front.simpleTemplate')

@section('navinfo')
	<img src="{!! asset('images/cloud.png') !!}" >
	<h3>Join <strong>APPinAIR</strong>, create the future</h3>
@stop

@section('main')
	<div style="text-align: center">
		<h2 class="intro-text text-center">{{ trans('front/password.title') }}</h2>
		<p>{{ trans('front/password.info') }}</p>
		@if(session()->has('status'))
			@include('partials/error', ['type' => 'success', 'message' => session('status')])
		@endif
		@if(session()->has('error'))
			@include('partials/error', ['type' => 'danger', 'message' => session('error')])
		@endif
		{!! Form::open(['url' => 'password/email', 'method' => 'post', 'role' => 'form']) !!}

		<div style="padding-left: 30%;padding-right: 30%">
			{!! Form::control('email', 6, 'email', $errors, trans('front/password.email')) !!}
			<br>
			{!! Form::submit(trans('front/form.send'), ['special']) !!}
		</div>
		{!! Form::close() !!}
	</div>
@stop
