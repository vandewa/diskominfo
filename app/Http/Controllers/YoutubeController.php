<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youtube;
use DataTables;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('youtube.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('youtube.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Youtube::create(
            [
                'link' => $request->link
            ]
        );

        return redirect ('youtube')->with('status', 'Link Youtube berhasil ditambahkan.');
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
        $youtube = Youtube::find($id);

        return view('youtube.edit', compact('youtube'));
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
         Youtube::find($id)->update([
            'link' => $request->link
        ]);

        return redirect ('youtube')->with('status', 'Link Youtube berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Youtube::destroy($id);

    }

    public function getYoutube(Request $request)
    {
            $data = Youtube::orderBy('created_at','desc')->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '
                    <div class="list-icons d-flex justify-content-center">
                    <a href="'.route('youtube.edit', $data->id ).' " class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="'.route('youtube.destroy', $data->id ).' " class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                </div>';
                    return $actionBtn;
                }
                )
                ->editColumn('link', function($data)
                {
                 $link = substr($data->link,30);
                 $link1 = "https://img.youtube.com/vi/$link/0.jpg";
                 $link2 = '<a href="'.$link1.'" target="_blank"><img src="'.$link1.'" style="height:50px;"></a>';

                 return $link2;
                })
                 ->editColumn('url', function($data)
                {
                $url = $data->link;

                 return $url;

                })
                
                ->rawColumns(['action', 'status','link'])
                ->make(true);
        
    }

}
