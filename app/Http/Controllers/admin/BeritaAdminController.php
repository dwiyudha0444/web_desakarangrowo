<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;
use DB;

class BeritaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::orderBy('id','DESC')->get();
        return view('admin.berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ar_user = User::all();
        return view('admin.berita.create',compact('ar_user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:45',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'id_name' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---aoakah user ingin upload foto
            if(!empty($request->foto)){
                $fileName=$request->judul.'.'.$request->foto->extension();
                //$fileName=$request->foto->getClientOriginalName();
                $request->foto->move(public_path('berita/img'),$fileName);
            }
            else{
                $fileName = '';
            }
            //insert data dari request form
            DB::table('berita')->insert(
                [
                    'judul' => $request->judul,
                    'tanggal' => $request->tanggal,
                    'keterangan' => $request->keterangan,
                    'id_name' => $request->id_name,
                    'foto' => $fileName,
                    'created_at' => now(),
              ]);
                

            
            return redirect()->route('beritaa.index')
            ->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ta = Berita::find($id);
        return view('admin.berita.detail',compact('ta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ta = Berita::find($id);
        return view('admin.berita.edit',compact('ta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|max:45',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---ambil foto lama
            $foto = DB::table('berita')->select('foto')->where('id',$id)->get();
            foreach($foto as $co){
                $namaFileFotoLama = $co->foto;
            }
            //---aoakah user ingin ganti foto lama
            if(!empty($request->foto)){
                //jika ada foto lama , hapus terlebih dahulu
                if(!empty($ta->foto)) unlink('berita/img'.$ta->foto);
                //foto lama ganti foto baru
                $fileName=$request->judul.'.'.$request->foto->extension();
                //$fileName=$request->foto->getClientOriginalName();
                $request->foto->move(public_path('berita/img'),$fileName);
            }
            //---user tidak ganti foto lama
            else{
                $fileName = $namaFileFotoLama;
            }
            DB::table('berita')->where('id',$id)->update(
                [
                    'judul' => $request->judul,
                    'tanggal' => $request->tanggal,
                    'keterangan' => $request->keterangan,
                    'foto' => $fileName,
                    'created_at' => now(),
              ]);
            
            return redirect('/beritaa'.'/'.$id)
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ta = Berita::find($id);
        Berita::where('id',$id)->delete();
        return redirect()->route('beritaa.index')
            ->with('success','Data Berhasil Dihapus');
    }
}
