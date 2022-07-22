<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Users;
use DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $prop['permission'] = Permission::all();
        return view('role.create', $prop);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Role::create($request->except(['proengsoft_jsvalidation', 'permission']));
        $data->attachPermissions($request->permission);

        return redirect ( route('role.index'))->with('status', 'Data Role berhasil ditambahkan.');


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
        $data = Role::with(['permissions'])->find($id);
        $permission = Permission::all();
        $inPermission = $data->permissions->pluck('name')->toArray();


        return view('role.edit', compact('data', 'permission','inPermission'));
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
        $data = Role::find($id)->update($request->except(['permission', 'proengsoft_jsvalidation']));

        $role =  Role::find($id);
        $role->syncPermissions($request->permission);
        
         return redirect ( route('role.index'))->with('status', 'Data Role berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::destroy($id);
    }

    public function getRole(Request $request)
    {
        //  <a href="'.route('role.destroy', $row->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>

            $data = Role::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('role.edit', $row->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                       
                    </div>';
                    return $actionBtn;
                })
                ->editColumn('name', function($row){
                    return $row->name??'';
                })
                ->editColumn('display_name', function($a){
                    return $a->display_name??'';
                })
                
                ->editColumn('description', function($a)
                {
                    return $a->description??'';
                })

                ->rawColumns(['action', 'status'])
                ->make(true);
        
    }
}
