<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
use DB;


class AnggotaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::orderBy('id','DESC')->get();
        return view('admin.anggota.index',compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:45',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---aoakah user ingin upload foto
            if(!empty($request->foto)){
                $fileName=$request->name.'.'.$request->foto->extension();
                //$fileName=$request->foto->getClientOriginalName();
                $request->foto->move(public_path('anggota/img'),$fileName);
            }
            else{
                $fileName = '';
            }
            //insert data dari request form
            DB::table('anggota')->insert(
                [
                    'name' => $request->name,
                    'jabatan' => $request->jabatan,
                    'foto' => $fileName,
                    'created_at' => now(),
              ]);
                

            
            return redirect()->route('anggotaa.index')
            ->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ta = Anggota::find($id);
        return view('admin.anggota.detail',compact('ta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ta = Anggota::find($id);
        return view('admin.anggota.edit',compact('ta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:45',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---ambil foto lama
            $foto = DB::table('anggota')->select('foto')->where('id',$id)->get();
            foreach($foto as $co){
                $namaFileFotoLama = $co->foto;
            }
            //---aoakah user ingin ganti foto lama
            if(!empty($request->foto)){
                //jika ada foto lama , hapus terlebih dahulu
                if(!empty($ta->foto)) unlink('anggota/img'.$ta->foto);
                //foto lama ganti foto baru
                $fileName=$request->name.'.'.$request->foto->extension();
                //$fileName=$request->foto->getClientOriginalName();
                $request->foto->move(public_path('anggota/img'),$fileName);
            }
            //---user tidak ganti foto lama
            else{
                $fileName = $namaFileFotoLama;
            }
            DB::table('anggota')->where('id',$id)->update(
                [
                    'name' => $request->name,
                    'jabatan' => $request->jabatan,
                    'foto' => $fileName,
                    'created_at' => now(),
              ]);
            
            return redirect('/anggotaa'.'/'.$id)
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ta = anggota::find($id);
        anggota::where('id',$id)->delete();
        return redirect()->route('anggotaa.index')
            ->with('success','Data Berhasil Dihapus');
    }
}
