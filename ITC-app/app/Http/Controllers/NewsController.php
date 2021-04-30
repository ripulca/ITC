<?php 

use Symfony\Component\HttpFoundation\Request;
	namespace App\Http\Controllers;

	use App\Models\News;

	class NewsController extends Controller
	{
		public function create()
		{
			return view('create');
		}

		public function store(Request $request)
		{
			return News::create([
				'title' => $request->title,
				'date' => $request->date,
				'content' => $request->content
			]);
		}

		public function index() 
		{
			$entity=News::all();
	        return view('index',compact($entity));
    	}

		public function show(int $id)
		{
			$entity=News::findOrFail($id);
			return view('welcome', compact($entity));
		}

		public function edit(int $id)
		{
			$entity=News::findOrFail($id);
			return view('edit', compact($entity));
		}

		public function update(int $id, Request $request)
		{
			if ($entity = News::findOrFail($id))
			{
				$entity->update([
					'title' =>$request->title,
					'date' =>$request->date,
					'content' =>$request->content
				]);
				return $entity;
			}
		}

		public function delete(int $id)
		{
			$entity = News::findOrFail($id);
			$entity->delete();
		}
	}

 ?>