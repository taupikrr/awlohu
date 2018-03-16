<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agen;
use App\User;
use App\rumah;
use App\Role;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\rumahException;

class agenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $agen = agen::all();
        return view('agen.index',compact('agen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new user;
        $user->name =$request->a;
        $user->email =$request->d;
        $user->password =bcrypt($request['pw']);
        $user->save();

        $agenRole = Role::where('name','agen')->first();
        $user->attachRole($agenRole);
        //
        $agen = new agen;
        $agen->id = $user->id;
        $agen->nama= $request->a;
        $agen->jk= $request->b;
        $agen->no_hp= $request->c;
        $agen->email= $request->d;

        if($request->hasFile('foto'))
        {
            $agens = $request->file('foto');
            $extension=$agens->getClientOriginalExtension();
            $filename=str_random(6).'.'.$extension;
            $destinationPath=public_path().
            DIRECTORY_SEPARATOR.'img';
            $agens->move($destinationPath, $filename);
            $agen->fotoagen=$filename;
            
        }

    $agen->save();
    return redirect('/agen/');
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
        //
        $agen=agen::findOrFail($id);
        return view('agen.edit', compact('agen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $agen=agen::find($id);
        $agen->nama= $request->a;
        $agen->jk= $request->b;
        $agen->no_hp= $request->c;
        $agen->email= $request->d;
    
        if($request->hasFile('foto'))
        {
            $agens = $request->file('foto');
            $extension=$agens->getClientOriginalExtension();
            $filename=str_random(6).'.'.$extension;
            $destinationPath=public_path().
            DIRECTORY_SEPARATOR.'img';
            $agens->move($destinationPath, $filename);
            $agen->fotoagen=$filename;
            
        }

        $agen->save();
        return redirect('/agen/');

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
        $agen=agen::findOrFail($id);
        $agen->delete();
        return redirect('agen');
    }

    
}
