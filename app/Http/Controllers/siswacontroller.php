<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\jurusan;
use Storage;
class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = 'siswa';
        $siswa_list = siswa::with('jurusan')->get();
        return view('siswa.siswa', compact('halaman','siswa_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halaman = 'siswa';
        $jurusan_list = jurusan::all();
        return view('siswa.tambah', compact('halaman','jurusan_list'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
                $ext= $foto->getClientoriginalExtension();
                if($foto->isValid()){
                    $foto_name = date('YmdHis')."$ext";
                    $upload= 'foto';
                    $foto->move($upload,$foto_name);
                    $input['foto'] = $foto_name;
                }
        }
        $siswa = siswa::create($input);
        $siswa->save();
        return redirect('siswa')
        ->with('success', 'Data is successfully created');
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
        $halaman = 'siswa';
        $jurusan_list = jurusan::all();
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('halaman','siswa', 'jurusan_list'));
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

            $siswa = siswa::findOrFail($id);
            $input = $request->all();
            if($request->hasFile('foto')){
                $exist= Storage::disk('foto')->exists($siswa->foto);
                if (isset($siswa->foto) && $exist){
                    $delete= Storage::disk('foto')->delete($siswa->foto);
                }
                $foto = $request->file('foto');
                $ext= $foto->getClientoriginalExtension();
                if($foto->isValid()){
                    $foto_name = date('YmdHis')."$ext";
                    $upload= 'foto';
                    $foto->move($upload,$foto_name);
                    $input['foto'] = $foto_name;
                }
            }

            $siswa->update($input);
            return redirect('siswa')->with('success', 'Data is successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect('siswa')
        ->with('success', 'Data is successfully deleted');

    }
}
