<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Linkyt;
use DB;

class LinkytAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $linkyt = Linkyt::orderBy('id','DESC')->get();
        return view('admin.linkyt.index',compact('linkyt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ta = Linkyt::find($id);
        return view('admin.linkyt.edit',compact('ta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'link' => 'required',
            'keterangan' => 'required'
            ]);
            
            
            DB::table('linkyt')->where('id',$id)->update(
                [
                    'link' => $request->link,
                    'keterangan' => $request->keterangan,
                    'created_at' => now(),
              ]);
            
            return redirect('/linkyt')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
