<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    
    public function profil()
    {
        $posting = DB::table('posting') 
    ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
    ->join('users', 'created_by', '=', 'users.id')
    ->select('posting.*','attachment.*', 'users.*')
    ->where('keterangan', '=', 'Profil')
    ->get();


    return view('home.profil', compact('posting'));
    }

    public function visimisi()
    {
        $posting = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->where('judul_posting', '=', 'Visi & Misi')
        ->get();
    
        return view('home.visimisi', compact('posting'));
    }

    public function struktur()
    {

        $posting = DB::table('posting') 
        ->leftJoin('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->leftJoin('users', 'created_by', '=', 'users.id')
        ->select('judul_posting', 'isi_posting','name','posting.created_at', 'file_name')
        ->where('created_by', '=', '577')
        ->where('kata_kunci', '=', 'Personil')
        
        ->get();
    
        return view('home.struktur', compact('posting'));
    }

    public function tupoksi()
    {

       
        $posting = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->where('keterangan', '=', 'Tupoksi')
        ->get();
        
    
        return view('home.tupoksi', compact('posting'));
    }

    public function detail($post)
    {

        $posting = DB::table('posting') 
        ->leftJoin('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->leftJoin('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->where('id_posting', '=', $post)
        ->get();
    
        return view('home.detail', compact('posting'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posting = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->orderBy('posting.created_at', 'desc')
        ->paginate(5);
        
        $postingg = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->where('posisi', '=', 'highlight')
        ->get();

        $home = Home::paginate(7);
    
        return view('home.index', compact('postingg', 'home','posting'));
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
