<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
//此处导入Request方可在之后使用Request中的静态方法
use Request as R;
class UserController extends Controller {
	//处理登录请求的方法
	public function signin(Requests\SigninRequest $request){
		$input = R::input();
		return $input;
	}
	public function signup(){
		$input = R::input();
		return $input;
	}
}
