<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
//此处导入Request方可在之后使用Request中的静�?�方��?
use Request as R;
use Illuminate\Http\Response;
use Carbon\Carbon;
class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$infos = Article::where('id','>','1')->paginate(3);
		return view('index') -> with('infos',$infos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StoreArticleRequest $request)
	{
		//
		$input = R::input();
		$input['intro'] = mb_substr($input['content'],0,64);
		//return $input;
		unset($input['_token']);
		if(Article::create($input)){
			return redirect('/');
		}
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
		$articles = new Article();
		$info = $articles -> find($id);
		return view('details') -> with('info',$info);
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
		$articles = new Article();
		$info = $articles -> find($id);
		return view('edit') -> with('info',$info);
	}

	public function update(Requests\UpdateArticleRequest $request,$id){
		$articles = Article::find($id);
		$input = R::input();
		$articles->title = $input['title'];
		$articles->intro = $input['intro'];
		$articles->content = $input['content'];
		if($articles->save()){
			return redirect('/');
		}else{
			return redirect('/');
		}
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
        if(Article::destroy($id)){
            return redirect('/');
        }else{
			return redirect('/');
		}
	}
}
