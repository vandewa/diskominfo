<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attachment;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $path = public_path('uploads/'.\Carbon\Carbon::now()->isoFormat('Y')); // tahun
        $paths = public_path('uploads/'.\Carbon\Carbon::now()->isoFormat('Y').'/'.\Carbon\Carbon::now()->isoFormat('MMMM').'/'); // bulan
        $no = 1;


        if (!file_exists($paths)) {
             if (!file_exists($path)) {
                mkdir($path);
              }
                mkdir($paths);
              
            }

              $files = $request->file('file_name'); 
                foreach($files as $a){
                    $prefix = date('Ymdhis');
                    $by = $request->created_by;
                    $extension = $a->extension();
                    $filename = $prefix.'-'.$no.'_'. $by.'.'.$extension;
                    $a->move($paths, $filename);
                    $attachment = new Attachment(); 
                    $attachment->file_name = $filename;
                    $attachment->save();
                    $no++;
                }

     
            
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
        //
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
