<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function show(){
    	return view('index');
    }

    public function store(Request $request){
    	$post = Post::create($request->All());
    }
}
