<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        // Mengambil ID pengguna yang sedang masuk
        $userId = Auth::id();

        // Mengambil semua gambar berdasarkan ID pengguna (user ID)
        $gambar = Post::latest()->paginate(4);
        return view('pages.user', compact('gambar'))->with('success');
    }
}
