@extends('layout/layout')
<div style="padding-left:20px;" class="post-inner">
    当前位置: <a href='/' onclick="return confirm('放弃修改?')">首页 </a> / <a href='/create'>发表文章</a>
</div>
@section('content')
<h2 class="post-title pad">
    发表文章
</h2>
{!! Form::open(['url' => '/store']) !!}
    <div class="form-group">
       {!! Form::label('title','标题:') !!}
       {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','正文:') !!}
        {!! Form::textarea('content',null,['id'=>'editor','placeholder'=>'在此输入内容n(*≧▽≦*)n','autofocus'=>'autofocus']) !!}
        <script>
            var editor = new Simditor({
                textarea: $('#editor')
                //optional options
            });
        </script>
    </div>
    <div class="form-group">
        {!! Form::label('published_at','发布日期:') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
   <div class="form-group">
       {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
   </div>
{!! Form::close() !!}
<a href="/" onclick="return confirm('放弃修改?')">返回首页</a>
@if($errors->any())
    文章标题，概要，内容均不能为空！
@endif
@endsection('content')
