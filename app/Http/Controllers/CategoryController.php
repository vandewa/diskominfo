<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DataTables;
use Symfony\Component\HttpFoundation\Test\Constraint\RequestAttributeValueSame;
use \Cviebrock\EloquentSluggable\Services\SlugService; 
use App\Http\Requests\CategorycreateValidation;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function store(CategorycreateValidation $request)
    {
        // $request->validate([
        //     'nama_kategori' => 'required',
        // ],
        // [
        //     'nama_kategori.required' => 'Nama kategori harus diisi.',
        // ]);

        Category::create(
            [
                'nama_kategori' => ucwords($request->nama_kategori),
                'slug' => $request->slug
                
            ]

        );


        return redirect ( url('category') )->with('status', 'Data kategori berhasil ditambahkan.');
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
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
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

        $request->validate([
            'nama_kategori' => 'required',
        ],
        [
            'nama_kategori.required' => 'Nama kategori harus diisi.',
        ]);


        Category::find($id)->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect ('category')->with('status', 'Data kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function getCategory(Request $request)
    {
            $data = Category::orderBy('nama_kategori', 'asc')->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = 
                    '<div class="list-icons">
                        <a href="'.route('category.edit', $data->id ).'" class="btn btn-outline-success rounded-round"><i class="icon-zoomin3 mr-2"></i>Detail</a>
                        <a href="'.route('category.destroy', $data->id ).' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                    return $actionBtn;
                })
               ->editColumn('nama_kategori', function($data)
                {
                    return $data->nama_kategori;
                })
                
                ->rawColumns(['action', 'status'])
                ->make(true);
        
    }

    public function destroy($id)
    {
        Category::destroy($id);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->nama_kategori);
        return response()->json(['slug' => $slug]); 
    }
}
