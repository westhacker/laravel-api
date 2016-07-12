@extends('front.simpleTemplate')

@section('navinfo')
    <img src="{!! asset('images/cloud.png') !!}" >
    <h3>Join <strong>APPinAIR</strong>, create the future</h3>
@stop

@section('main')

    {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}
        {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}
    {!! Form::close() !!}



        @foreach($posts as $post)
            <div class="main style1">
                <div class="col-lg-12 text-center">
                    <a href={{url("blog/". $post->slug)}}><h2>{{ $post->title }}</h2></a>
                    <hr>
                    <blockquote>{{ $post->user->username }} {{ trans('front/blog.on') }} {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</blockquote>
                </div>
                <div class="col-lg-12">
                    <p>{!! $post->summary !!}</p>
                </div>
                <div class="col-lg-12 text-center">
                    {!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'button special pull-right']) !!}
                </div>
            </div>
        @endforeach

        <br>
        <ul class="actions pull-right">
            {!! $links !!}
        </ul>


@stop

