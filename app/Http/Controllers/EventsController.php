<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
	public function index()
	{
		return view('events.index');
	}

	public function category($category, $subcategory = 'all'){
		dd("Category: {$category}
			  subcategory: {$subcategory}");
	}

	public function show($id){
		// dd($id);
		return view('events.show')
		->with('id',$id);
	}
}
