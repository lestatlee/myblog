@extends('layout/layout')
<h2 class="post-title pad">
    注册页面
</h2>
@section('content')
<form method='post' action='/signup'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    用户名:
    <input type='text' name='username' />
    <br />
    邮件地址:
    <input type='text' name='email' />
    <br />
    手机号:
    <input type='text' name='tele' />
    <br />
    密码:
    <input type='password' name='password' />
    <br />
    确认密码:
    <input type='password' name='re-password' />
    <br />
    <input type='submit' value='提交' />
    @if($errors->any())
        以上选项均不能为空!
    @endif
</form>
<a href="/">返回首页</a>
@endsection('content')
