<?php

namespace App\Http\Controllers;

use App\ketua;
use App\calon;
use App\siswa;

use Illuminate\Http\Request;

class ketuacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa_list = siswa::all();
        return view('calon.tambah', compact('siswa_list'));
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
        $ketua = new ketua();
        $ketua->nis_ketua = $input['nis_ketua'];
        $ketua->save();
        
        $siswa_list = siswa::all();
        $calons = ketua::where('nis_ketua',$ketua->nis_ketua)->first();
        return view('calon.tambahwakil', compact('calons', 'siswa_list')); 
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
        $halaman = 'calon';
        $siswa_list = siswa::all();
        $ketua = ketua::findOrFail($id);
        return view('calon.edit',compact ('halaman','ketua','siswa_list'));
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
        $ketua = ketua::findOrFail($id);
        $input = $request->all();
        $ketua->nis_ketua = $input['nis_ketua'];

        $ketua->update();
        $siswa_list = siswa::all();
        $ketua = ketua::where('id',$ketua->id)->first();
        // dd($calons);
        $wakil = calon::where('calon_id',$id)->first();
        return view('calon.editwakil', compact('ketua','wakil','siswa_list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
