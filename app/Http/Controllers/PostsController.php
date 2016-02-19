<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function create() {
		return 'Create Post';
	}
	
	public function show($id) {
		return 'Show '.$id.' post';
	}
}
