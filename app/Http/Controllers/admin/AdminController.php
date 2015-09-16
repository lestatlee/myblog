<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = 'Welcome!';
		$content = 'Laravel学习笔记';
		$names = array('Tom','Jack','Lestat','Mike','Anderson');
		//此处的admin.index中的.是使用了路径别名，同样也可以使用/
		//第一种传值方式
		//return view('admin.index') -> with('title',$title);
		//以下为多个值得传递,传递过程中每个key都会作为变量，而value作为该变量的值
		/*return view('admin.index',[
			'title' => $title,
			'content' => $content
			]);*/
		//使用compact传递变量，里面的变量用逗号隔开即可
		return view('admin.index',compact('title','content','names'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
