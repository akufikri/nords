<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Likes;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
public function index()
{
    $data = Posts::with('user')
    ->orderBy('created_at', 'desc') // Order by the 'created_at' timestamp in descending order
    ->get();

    $likesCount = DB::table('likes')
        ->select('posts_id', DB::raw('COUNT(*) as total_likes'))
        ->groupBy('posts_id')
        ->get()
        ->keyBy('posts_id');

    return view("pages.beranda", compact('data', 'likesCount'));
}

public function detail_user($name)
{
    $data = User::where('name', $name)->firstOrFail();
    return view('pages.detail.detail-users', compact('data'));
}



}
