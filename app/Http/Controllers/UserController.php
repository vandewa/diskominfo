<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Users;
use DataTables;
use App\Http\Requests\UsercreateValidation;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsercreateValidation $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'level' => 'required'
        ],
        [
            'nama.required' => 'Nama harus diisi.',
            'email.required' =>'Email harus diisi.',
            'level.required' => 'Level harus dipilih.
            '
        ]);

          Users::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level
          ]);

          return redirect ('user')->with('status', 'Data user berhasil ditambahkan');
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
        return view('user.edit', compact('user'));
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

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'level' => 'required'
        ],
        [
            'nama.required' => 'Nama harus diisi.',
            'email.required' =>'Email harus diisi.',
            'level.required' => 'Level harus dipilih.'
        ]);

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

        return redirect('user')->with('status', 'Data user berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Users::destroy($id);
    
       
    }

     public function getUser(Request $request)
    {
            $data = User::orderBy('name','asc')->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    if(auth()->user()->level=='superadmin'){
                    $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="'.route('user.edit', $data->id ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('user.destroy', $data->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                    </div>';
                    return $actionBtn;
                    }
                }
                )
                ->editColumn('nama', function($data)
                {
                    return $data->name;
                })

                ->editColumn('email', function($data)
                {
                    return $data->email;
                })

                ->editColumn('level', function($data)
                {
                    $level = '<span class="badge badge-flat border-primary text-primary-600">'.ucwords($data->level).'</span>';
                    return $level;
                })
                ->rawColumns(['action', 'status','level'])
                ->make(true);
        
    }
}
