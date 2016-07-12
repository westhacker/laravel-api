@extends('front.simpleTemplate')


@section('navinfo')
	<br>
	<h3>{{ trans('front/login.connection') }}</h3>
	@if(session()->has('error'))
		@include('partials/error', ['type' => 'danger', 'message' => session('error')])
	@endif
	{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}

	<div style="padding-left: 30%;padding-right: 30%">
		{!! Form::control('text', 6, 'log', $errors, trans('front/login.log')) !!}
		<br>
		{!! Form::control('password', 6, 'password', $errors, trans('front/login.password')) !!}
		<br>
		<input type="checkbox" id="demo-copy" name="memory">
		<label for="demo-copy">{{trans('front/login.remind')}}</label>
	</div>

	<ul class="actions">
		<li><input type="submit" value="Login" class="special" /></li>
	</ul>

	{!! link_to('password/email', trans('front/login.forget')) !!}

	{!! Form::close() !!}
@stop

@section('main')
	<div style="text-align: center">
		<h2 class="intro-text text-center">{{ trans('front/login.register') }}</h2>
		<p>{{ trans('front/login.register-info') }}</p>
		{!! link_to('auth/register', trans('front/login.registering'), ['class' => 'button special']) !!}
	</div>
@stop


