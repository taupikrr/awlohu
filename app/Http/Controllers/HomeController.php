<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rumah;
use App\jenis;
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
        return view('home');
    }
    public function filter($perumahan)
    {

        $model = rumah::where('jenis_id',$perumahan)->get();
        $count = rumah::where('jenis_id',$perumahan)->count();
        $nama = jenis::find($perumahan);
       return view('filter',compact('model','count','nama'));
    }
}
