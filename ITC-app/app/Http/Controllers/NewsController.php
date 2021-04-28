<?php 
	namespace App\Http\Controllers;

	use App\Models\News;

	class NewsController extends Controller
	{
		
		public function index()
		{
			return News::all();
		}

		public function showAll() {
	        $news = News::all();
	        return view('welcome', compact('news'));
    	}
	}

 ?>