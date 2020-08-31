<?php

namespace App\Http\Controllers;

use App\Facture;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $facture = Facture::All();
        $user = User::all();
        // $user = DB::table('users')->join('images','images.user_id','=','users.id')->select('images.path','users.id','users.Desc','users.created_at','users.name')->where('users.id',Auth::user()->id)->get();
        return view('home',["facture"=>$facture,"User"=>$user]);
    }
}
