@extends('layout/layout')
@section('content')
<div style="padding-left:20px;" class="post-inner">
    当前位置:<a href='/'>首页</a>/<a href='/view/{{$info->id}}'>文章</a>
</div>
    <info class="format-image group">
        <h2 class="post-title pad">
            <a href="/view/{{ $info->id }}" rel="bookmark"> {{ $info->title }}</a>
        </h2>
        <div class="post-inner">
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $info->id }}
                    {{ $info->title }}
                    {{ $info->intro }}
                    {{ $info->content }}
                </div>
            </div>
            <a href="/">返回首页</a>
        </div>
    </info>
@endsection
