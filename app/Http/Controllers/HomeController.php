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
        $userId = Auth::id();

        // Mendapatkan nilai parameter jumlah gambar yang ingin ditampilkan dari query string
        $gambarCount = $request->input('gambar_count', session('gambar_count', 4));

        // Simpan nilai gambar_count ke dalam sesi
        session(['gambar_count' => $gambarCount]);

        // Mengambil gambar sesuai dengan jumlah yang diminta
        $gambar = Post::latest()->paginate($gambarCount);

        return view('pages.user', compact('gambar', 'gambarCount'))->with('success');
    }
}
