<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\calon;
use App\siswa;
use App\admin;
use App\ketua;
use App\Session;
use Storage;

class calonController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
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
        $halaman ='calon';
        $calon_list = calon::all();
        return view('calon.calon', compact('halaman','calon_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa_list = siswa::all();
        return view('calon.tambahwakil', compact('siswa_list'));
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
        if($request->hasFile('foto_paslon')){
            $foto = $request->file('foto_paslon');
                $ext= $foto->getClientoriginalExtension();
                if($foto->isValid()){
                    $foto_name = date('YmdHis')."$ext";
                    $upload= 'foto_paslon';
                    $foto->move($upload,$foto_name);
                    $input['foto_paslon'] = $foto_name;
                }
        }
        $calon = new calon();
        $calon->nis_wakil = $input['nis_wakil'];
        $calon->admin_id = \Auth::user()->id;
        $calon->foto_paslon = $input['foto_paslon'];
        $calon->visi = $input['visi'];
        $calon->misi = $input['misi'];
        $calon->slogan = $input['slogan'];
        $calon->calon_id = $input['calon_id'];
        $calon->paslon_nomor = $input['paslon_nomor'];

        $calon->save();
        // dd($calons);
        $cekketua = DB::select("SELECT COUNT(*) FROM ketua WHERE id='$request->input['calon_id']'");
        if ($cekketua==null){
            DB::delete("DELETE * FROM ketua WHERE id='$request->input['calon_id']'");
        } 
        return redirect('calon');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calon = calon::where('id', $id)->first();
        return view('calon.detail', compact('calon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa_list = siswa::all();
        $calon = calon::findOrFail($id);
        return view('calon.editwakil',compact ('calon','siswa_list'));
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
        $calon = calon::findOrFail($id);
        $input = $request->all();
        
        if($request->hasFile('foto_paslon')){
            $exist= Storage::disk('foto_paslon')->exists($calon->foto_paslon);
            if (isset($calon->foto_paslon) && $exist){
                $delete= Storage::disk('foto_paslon')->delete($calon->foto_paslon);
            }
            $foto = $request->file('foto_paslon');
            $ext= $foto->getClientoriginalExtension();
            if($foto->isValid()){
                $foto_name = date('YmdHis')."$ext";
                $upload= 'foto_paslon';
                $foto->move($upload,$foto_name);
                $input['foto_paslon'] = $foto_name;
            }
            $calon->foto_paslon = $input['foto_paslon'];
        }
        $calon->nis_wakil = $input['nis_wakil'];
        $calon->admin_id = \Auth::user()->id;
        $calon->visi = $input['visi'];
        $calon->misi = $input['misi'];
        $calon->slogan = $input['slogan'];
        $calon->calon_id = $input['calon_id'];
        $calon->paslon_nomor = $input['paslon_nomor'];

        $calon->update();

        return redirect('calon')->with('Success','Data is successfully Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ketua $calon)
    {
        $calon->delete();
        return redirect('calon')
        ->with('success', 'Data is successfully deleted');
    }
    
}
