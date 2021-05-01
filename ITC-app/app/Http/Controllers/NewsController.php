<?php 
	namespace App\Http\Controllers;
	use App\Http\Requests\NewsRequest;
	use App\Models\News;

	class NewsController extends Controller
	{
		public function create()
		{
			return view('create');
		}

		public function store(NewsRequest $request)
		{
			News::create($request->only(['title', 'date', 'content']));
			return redirect()->route('news.index');
		}

		public function index() 
		{
			$news=News::all();
	        return view('index',compact('news'));
    	}

		public function show(News $news)
		{
			return view('show', compact('news'));
		}

		public function edit(News $news)
		{
			return view('edit', compact('news'));
		}

		public function update(NewsRequest $request, News $news)
		{
			$news->update($request->only(['title', 'content', 'date']));
			return redirect()->route('news.index');
		}

		public function delete(int $id)
		{
			$entity = News::findOrFail($id);
			$entity->delete();
		}
	}

 ?>