<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Posting;

class HomeController extends Controller
{

    public function profil()
    {

     $profil = DB::table('posting') 
    ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
    ->join('users', 'created_by', '=', 'users.id')
    ->select('posting.*','attachment.*', 'users.*')
    ->where('keterangan', '=', 'Profil')
    ->get();


    return view('home.profil', compact('profil'));
    }

    public function visimisi()
    {
        $visimisi = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->where('judul_posting', '=', 'Visi & Misi')
        ->get();

        return view('home.visimisi', compact('visimisi'));
    }

    public function struktur()
    {

        $struktur = Posting::with(['personil', 'nama'])
        ->where('created_by', '=', '577')
        ->where('kata_kunci', '=', 'Personil')
        ->get();
    
        return view('home.struktur', compact('struktur'));
    }

    public function tupoksi()
    {

        $tupoksi = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->where('keterangan', '=', 'Tupoksi')
        ->get();

        return view('home.tupoksi', compact('tupoksi'));
    }

    public function detail($post)
    {
        $detail = Posting::with(['attachment', 'gambarMuka', 'nama'])
        ->where('id_posting', '=', $post)
        ->get();

        return view('home.detail', compact('detail'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posting2 = Posting::with(['attachment', 'gambarMuka'])->orderBy('created_at', 'desc')->paginate(7);
        $postingg = Posting::with(['attachment', 'gambarMuka', 'nama'])
        ->where('posisi', '=', 'highlight')
        ->get();

        $posting = DB::table('posting') 
        ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        ->join('users', 'created_by', '=', 'users.id')
        ->select('posting.*','attachment.*', 'users.*')
        ->orderBy('posting.created_at', 'desc');

        // $postingg = DB::table('posting') 
        // ->join('attachment', 'id_posting', '=', 'attachment.id_tabel')
        // ->join('users', 'created_by', '=', 'users.id')
        // ->select('posting.*','attachment.*', 'users.*')
        // ->where('posisi', '=', 'highlight')
        // ->get();

        return view('home.index', compact('posting2', 'posting', 'postingg'));
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
