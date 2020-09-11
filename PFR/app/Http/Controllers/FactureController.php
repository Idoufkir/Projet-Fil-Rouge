<?php

namespace App\Http\Controllers;

use App\Facture;
use App\Http\Requests\Facturevalidator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Question\Question;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = DB::table('users')->select('id','name')->where('users.function','provider')->get();
        return view('post.facture',['username'=>$username]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Facturevalidator $request)
    {
        // dd("hello");
        $data = $request->only(['Subject','Desc','fonction','Status','ID_client','ID_manager']);
        $post = DB::table('users')->select('id','name')->where('users.name',$data['ID_client'])->get();
        $user = Auth::user();
        $data["ID_manager"] = $user->id;
        $data["ID_client"] = $post[0]->id;
        $question = Facture::create($data);
        return redirect()->route('home');
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
        $post = Facture::findOrFail($id);
        // dd($post->ID_manager);
        $ID_manager = User::where("id",$post->ID_manager)->get(); 
        $ID_client = User::where("id",$post->ID_client)->get(); 
        return view('updatefacture',[
            'post'=>$post,
            "ID_manager"=>$ID_manager,
            "ID_client"=>$ID_client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Facturevalidator $request, $id)
    {
        $post = Facture::findOrFail($id);
        
        $post->Subject = $request->input('Subject');
        $post->Desc = $request->input('Desc');
        $post->Status = $request->input('Status');
        $post->fonction = $request->input('fonction');
        $ID_manager = User::where("name",$request->input('ID_manager'))->get(); 
        $ID_client = User::where("name",$request->input('ID_client'))->get();
        $post->ID_manager = $ID_manager[0]->id;
        $post->ID_client = $ID_client[0]->id;
        $post->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Facture::findOrFail($id);
        $post->delete();
        $facture = Facture::All();
        return redirect()->back();
    }
}
