<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('user.index');
    }
    public function getuser()
    {
        return $user = User::find(auth::user()->id);
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
        //
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
        $user = user::find($id);
        if($request->photo)
        {
            //desconponiendo imagen para sacar la url y el nombre y extencion
            list($type, $imagedata) = explode(';',$request->photo);
            list(,$extension) = explode('/',$type);
            list(,$imagedata) = explode(',',$imagedata);
            $filename = "storage/users/".uniqid().'.'.$extension;

            $source = fopen($request->photo, 'r');
            $destination = fopen($filename, 'w');
            stream_copy_to_stream($source, $destination);
            fclose($source);
            fclose($destination);
            //eliminando la imagen actualizada
            $image_path = '../public/'.$user->photo;
            if (@getimagesize($image_path)) {
                unlink($image_path);
            }
            
            $user->update(['photo' => $filename]);
        }
        //actualizando todos los campos imputs tipo string excepto la foto
        $user->update($request->except(['photo']));
        return;
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
