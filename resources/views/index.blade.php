@extends('layout/layout')
<info class="format-image group">
<h2 class="post-title pad">
    <a href="/create">发表文章</a>
    <a href='/login'>登录</a>
    <a href='/register'>注册</a>
</h2>
<div class="post-deco">
</div>
@section('content')
<div style="padding-left:20px;" class="post-inner">
    当前位置:<a href='/'>首页</a>/
</div>
<div class="post-deco">
</div>

@foreach($infos as $info)
    <h2 class="post-title pad">
        <a href="/view/{{ $info->id }}"> {{ $info->title }}</a>
    </h2>
    <br />
    <div class="post-inner">
        <div class="post-deco">
            <div class="hex hex-small">
                <div class="hex-inner"><i class="fa"></i></div>
                <div class="corner-1"></div>
                <div class="corner-2"></div>
            </div>
        </div>
        <div class="post-content pad">
            <div class="entry custome">
                {{ $info->intro }}
                {{ $info->created_at }}
                <br />
                <a href="/edit/{{ $info->id }}">编辑</a> <a href="/del/{{ $info->id }}" onclick="return confirm('确定删除?')">删除</a>
            </div>
            <a class="more-link-custom" href="/view/{{ $info->id }}"><span><i>查看详情</i></span></a>
        </div>
    </div>
</info>
@endforeach
<?php echo $infos->render(); ?>
@endsection()
