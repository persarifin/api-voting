<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\vote;
use DB;

class voteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select("SELECT s.nama AS nama_ketua, cw.foto_paslon,cw.id,cw.paslon_nomor,cw.slogan, (SELECT siswa.nama FROM siswa JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS nama_wakil, (((SELECT COUNT(*) FROM vote WHERE vote.calon_id=cw.id)/(SELECT COUNT(*) FROM vote))*100) AS persentase, (SELECT COUNT(*) FROM vote WHERE vote.calon_id=cw.id) AS person FROM siswa s JOIN (ketua k JOIN calon_wakil cw ON k.id=cw.calon_id) ON s.nrp=k.nis_ketua ");  
        
        

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vote = new vote();
        $vote->siswa_id = $request->siswa_id;
        $vote->calon_id = $request->calon_id;

        $vote->save();
    
        return response()->json($vote);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        //
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
        //
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
    public function get(Request $request)
    {
        $vote = DB::table('vote')
                        ->join('siswa','vote.siswa_id','=','siswa.nrp')
                        ->join('calon_wakil','vote.calon_id','=','calon_wakil.id')
                        ->where('siswa.nrp', '=', $request->input('siswa_id'))
                        ->get();      

        return response()->json($vote);
    }
    public function getpresent(Request $request){
        $input= $request->input('no_paslon');
        $persen = DB::select("SELECT jurusan.jurusan as jurusan, (SELECT COUNT(*) FROM vote v JOIN siswa ON v.siswa_id = siswa.nrp join calon_wakil cw ON cw.id=v.calon_id where siswa.jurusan_id=jurusan.id AND cw.paslon_nomor='$input') AS pemilih, ((SELECT COUNT(*) FROM vote v JOIN siswa ON v.siswa_id = siswa.nrp join calon_wakil cw ON cw.id=v.calon_id where siswa.jurusan_id=jurusan.id AND cw.paslon_nomor='$input')/(SELECT COUNT(*) FROM vote JOIN calon_wakil cw on cw.id=vote.calon_id WHERE cw.paslon_nomor='$input') * (((SELECT COUNT(*) FROM vote JOIN calon_wakil cw on cw.id=vote.calon_id WHERE cw.paslon_nomor='$input')/(SELECT COUNT(*) FROM siswa))*100)) AS persentase FROM jurusan");
        return response()->json($persen);
    }
}
