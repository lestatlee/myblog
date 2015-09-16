@extends('app')
@section('content')
    <h1>撰写新文章</h1>
    {{--此处提交的默认地址是本页面，因此需要在open()中单独设定,由键值对的形式出现，其值为url地址，之后再在路由中配置该值即可--}}
	{!! Form::open(['url' => 'articles/store']) !!}
	   <div class="form-group">
	       {!! Form::label('title','标题:') !!}
	       {!! Form::text('title',null,['class'=>'form-control']) !!}
	   </div>
	   <div class="form-group">
	       {!! Form::label('introduction','概要:') !!}
	       {!! Form::text('introduction',null,['class'=>'form-control']) !!}
	   </div>
	   <div class="form-group">
	       {!! Form::label('content','正文:') !!}
	       {!! Form::textarea('content',null,['class'=>'form-control']) !!}
	   </div>
	   <div class="form-group">
	       {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
	   </div>
	{!! Form::close() !!}
@endsection