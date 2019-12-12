<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kokyaku1;
use App\souko;
use App\syouhin1;
use App\orderhenkan;
use App\tuhanorder;
use App\toiawasebango;
use DB;
use App\AllClass\csvValidator;
use App\AllClass\insertCsv;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homeOld');
    }
    
}
