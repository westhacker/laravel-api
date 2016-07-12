@extends('front.simpleTemplate')

@section('navinfo')
	<img src="{!! asset('images/contact.png') !!}" width="346px" height="252px">
	<h3>Tell <strong>APPinAIR</strong> what you are wondering</h3>
@stop


@section('main')
	<h4>{{ trans('front/contact.title') }}</h4>
	<hr>
	<p>{{ trans('front/contact.text') }}</p>
	{!! Form::open(['url' => 'contact', 'method' => 'post', 'role' => 'form']) !!}
	<div class="row uniform 50%">

		<div class="6u 12u$(xsmall)">
			{!! Form::control('text', 6, 'name', $errors, trans('front/contact.name')) !!}
		</div>
		<div class="6u$ 12u$(xsmall)">
			{!! Form::control('email', 6, 'email', $errors, trans('front/contact.email')) !!}
		</div>
		<div class="12u$">
			{!! Form::control('textarea', 12, 'message', $errors, trans('front/contact.message')) !!}
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