<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repository\LikeRepository;
// Remove the line below since the Request class is already imported in the namespace
// use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{

public function index(Request $request){
    $likes = Like::all();
    return view('Likes.index', ['likes' => $likes]);
}
}





