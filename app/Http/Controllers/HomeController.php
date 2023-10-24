<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        session()->flash('success', 'Kamu berhasil login ke Laman Admin!');
        return view('admin.admin')->with('success', 'Kamu berhasil login ke Laman Admin!');
    }

    public function index_user()
    {
        session()->flash('success', 'Kamu berhasil login ke Laman User!');
        return view('pages.user')->with('success', 'Kamu berhasil login ke Laman User!');;

    }
}
