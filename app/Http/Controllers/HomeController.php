<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::orderByDesc('created_at')->get();
        return view('home',['status' => $status]);
    }
}
