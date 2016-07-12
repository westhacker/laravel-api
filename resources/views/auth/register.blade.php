@extends('front.simpleTemplate')

@section('navinfo')
	<img src="{!! asset('images/cloud.png') !!}" >
	<h3>Join <strong>APPinAIR</strong>, create the future</h3>
@stop

@section('main')
	<h4>{{ trans('front/register.title') }}</h4>
	<hr>
	<p>{{ trans('front/register.infos') }}</p>
	{!! Form::open(['url' => 'auth/register', 'method' => 'post', 'role' => 'form']) !!}
	<div class="row uniform 50%">

		<div class="6u 12u$(xsmall)">
			{!! Form::control('text', 6, 'username', $errors, trans('front/register.pseudo'), null) !!}
		</div>
		<div class="6u$ 12u$(xsmall)">
			{!! Form::control('email', 6, 'email', $errors, trans('front/register.email')) !!}
		</div>
		<div class="6u 12u$(xsmall)">
			{!! Form::control('password', 6, 'password', $errors, trans('front/register.password'), null) !!}
		</div>
		<div class="6u 12u$(xsmall)">
			{!! Form::control('password', 6, 'password_confirmation', $errors, trans('front/register.confirm-password')) !!}
		</div>
		<div class="12u$">
			<ul class="actions">
				<li><input type="submit" value="{{trans('front/form.send')}}" class="special" /></li>
				<li><input type="reset" value="Reset" /></li>
			</ul>
		</div>

	</div>
	{!! Form::close() !!}

@stop

@section('scripts')

	<script>
		$(function() { $('.badge').popover();	});
	</script>

@stop