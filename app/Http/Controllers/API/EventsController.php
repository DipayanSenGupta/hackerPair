<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
class EventsController extends Controller
{
	public function index(){
		return Event::orderBy('created_at','asc')->take(10)->get();
		// return response()->json(['status' => 'error'],500);
	}
}
