<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValiditeEditProfils;
use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrfilseditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Profils.ProfilsPersonne");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = User::findOrFail($id);
        return view("Profils.ProfilsPersonne",[
            'posts' =>$post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValiditeEditProfils $request, $id)
    {
    $count = DB::table('Images')->where('user_id',Auth::user()->id)->count();
    $post = User::findOrFail($id);
    if($count == 0){
    $post->name = $request->input('name');
    $post->description = $request->input('Desc');
        if ($request->hasfile('image')){
            $path =   $request->file('image')->store('User');
            $image = new Image(['path' => $path]);
            $post->image()->save($image);
            $post->save();
            $user  = User::where("id",Auth::user()->id)->firstorFail();
            return redirect()->route('Profils');
          }
    }else{
    $post->name = $request->input('name');
    $post->description = $request->input('Desc');
        if ($request->hasfile('image')){
            $path =  $request->file('image')->store('User');
            $image = Image::where("user_id",$id)->firstorFail();
            $image->path = $path;
            $post->image()->save($image);
            $post->save();
            return redirect()->route('Profils');
  }
    }
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
