<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Users;
use App\Models\Role;
use DataTables;
use App\Http\Requests\UsercreateValidation;
use Illuminate\Support\Facades\Hash;
use \Cviebrock\EloquentSluggable\Services\SlugService; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    if(!auth()->user()->hasPermission('users-read')){
    //     abort(403);
    //    }
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     if(!auth()->user()->hasPermission('users-read')){
    //     abort(403);
    //    }

       $role = Role::with(['permissions'])->get();

        return view('user.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsercreateValidation $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required|email',
        //     'level' => 'required',
        //     'nip' => 'required',
        //     'jabatan' => 'required',
        //     'opd' => 'required',
        //     'no_hp' => 'required',
            
        // ],
        // [
        //     'nama.required' => 'Nama harus diisi.',
        //     'email.required' =>'Email harus diisi.',
        //     'level.required' => 'Level harus dipilih.',
        //     'nip.required' => 'Nip harus diisi.',
        //     'jabatan.required' => 'Jabatan harus diisi.',
        //     'opd.required' => 'OPD harus diisi.',
        //     'no_hp.required' => 'No Hp harus diisi.',
        // ]);

          $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'opd' => $request->opd,
            'no_hp' => $request->no_hp,
            'slug' => $request->slug,
          ]);

          $user->attachRole($request->level);

          return redirect(route('user.index'))->with('status', 'Data user berhasil ditambahkan');
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
    public function edit(User $user)
    {
        
        // if(!auth()->user()->hasPermission('users-update')){
        // abort(403);
        // }
       
        $role = Role::with(['permissions'])->get();

        return view('user.edit', compact('user', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsercreateValidation $request, $id)
    {

        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required|email',
        //     'level' => 'required',
        //     'nip' => 'required',
        //     'jabatan' => 'required',
        //     'opd' => 'required',
        //     'no_hp' => 'required',
        // ],
        // [
        //     'nama.required' => 'Nama harus diisi.',
        //     'email.required' =>'Email harus diisi.',
        //     'level.required' => 'Level harus dipilih.',
        //     'nip.required' => 'Nip harus diisi.',
        //     'jabatan.required' => 'Jabatan harus diisi.',
        //     'opd.required' => 'OPD harus diisi.',
        //     'no_hp.required' => 'No Hp harus diisi.',
        // ]);

        User::find($id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'opd' => $request->opd,
            'no_hp' => $request->no_hp,
            'level' => $request->level,
            'slug' => $request->slug,
        ]);

        if($request->filled('password')){
            Users::find($id)->update([
                'password' => Hash::make($request->password)
            ]);
        }

        $user = User::find($id);
        $user->syncRoles([$request->level]);
        
        return redirect(route('user.index'))->with('status', 'Data user berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->hasPermission('users-delete')){
        abort(403);
       }
        Users::destroy($id);
       
    }

     public function getUser(Request $request)
    {
            $data = User::with(['roles']);

            // return $data;
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                  
                    $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('user.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-eye mr-2"></i>Lihat</a>
                        <a href="'.route('user.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    return $actionBtn;
                   
                })
                ->addColumn('role', function($a){
                    $data = $a->roles;
                    $tampung = '';
                    $hitung = count($data);
                    foreach ($data as $item)
                    {
                        $cek = $hitung > 1? ' | ': ' ';
                        $tampung = $tampung.$item->display_name.$cek;
                    }
                    return $tampung;
                })
                ->editColumn('name', function($data)
                {
                    return $data->name;
                })

                ->editColumn('email', function($data)
                {
                    return $data->email;
                })

                // ->editColumn('level', function($data)
                // {
                //     $level = '<span class="badge badge-flat border-primary text-primary-600">'.ucwords($data->roles[0]->display_name??'').'</span>';
                //     return $level;
                // })
                ->rawColumns(['action', 'status','role'])
                ->make(true);
        
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Users::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]); 
    }
}
