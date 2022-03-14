<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsercreateValidation;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::with(['permissions'])->get();

        return $role;

        return view('account.index',compact('role'));
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
        $role = Role::with(['permissions'])->get();

        return view('account.edit', compact('role'));
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
        
        Users::find($id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'level' => $request->level
        ]);

        if($request->filled('password')){
            Users::find($id)->update([
                'password' => Hash::make($request->password)
            ]);
        }
        
        if($request->hasFile('profile_photo_path')){
            $a = $request->file('profile_photo_path');
            $prefix = $request->name;
            $extension = $a->extension();
            $filename = $prefix.'.'.$extension;
            $c= $request->file('profile_photo_path')->move(public_path('/uploads'), $filename);

            Users::find($id)->update([
                'profile_photo_path' => $filename
            ]);
        }
     
        return redirect(url('account/'.$id.'/edit'))->with('status', 'Data berhasil diubah.');
    
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
