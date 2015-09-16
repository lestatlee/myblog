@extends('layout/layout')
<h2 class="post-title pad">
    登录页面
</h2>
@section('content')
<form method='post' action='/signin'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    用户名:
    <input type='text' name='username' />
    密码:
    <input type='password' name='password' />
    <input type='submit' value='提交' />
    @if($errors->any())
        用户名或密码不能为空!
    @endif
</form>
<a href="/">返回首页</a>
@endsection('content')
