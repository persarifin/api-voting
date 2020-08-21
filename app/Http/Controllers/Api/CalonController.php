<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\calon;
use DB;
use App\Session;

class CalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(){
        $data2 = DB::select("SELECT jurusan.jurusan as jurusan, (SELECT COUNT(*) FROM vote v JOIN siswa ON v.siswa_id = siswa.nrp join calon_wakil cw ON cw.id=v.calon_id where siswa.jurusan_id=jurusan.id AND cw.id=v.calon_id) AS pemilih, ((SELECT COUNT(*) FROM vote v JOIN siswa ON v.siswa_id = siswa.nrp join calon_wakil cw ON cw.id=v.calon_id where siswa.jurusan_id=jurusan.id AND cw.id=v.calon_id)/(SELECT COUNT(*) FROM vote JOIN calon_wakil cw on cw.id=vote.calon_id WHERE cw.id=vote.calon_id) * (((SELECT COUNT(*) FROM vote JOIN calon_wakil cw on cw.id=vote.calon_id WHERE cw.id=vote.calon_id)/(SELECT COUNT(*) FROM siswa))*100)) AS persentase FROM jurusan");
        return response()->json($data2);
    }
    public function index()
    {
        $data = DB::select("SELECT s.nama AS nama_ketua, cw.paslon_nomor,cw.foto_paslon,cw.id, (SELECT siswa.nama FROM siswa JOIN jurusan j ON j.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS nama_wakil, ((SELECT COUNT(*)FROM vote) / (SELECT COUNT(*) FROM siswa)*100)as persentase, (SELECT COUNT(*) FROM vote)as pemilih FROM (siswa s JOIN jurusan j ON s.jurusan_id=j.id) JOIN (ketua k JOIN calon_wakil cw ON k.id=cw.calon_id) ON s.nrp=k.nis_ketua ORDER BY cw.id ASC"); 
        
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
        //
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
    public function getvote(Request $request){
        $data = DB::select("SELECT s.nama AS nama_ketua, s.foto AS foto_ketua, s.jk AS jk_ketua,s.tgl_lahir AS ttl_ketua, j.kelas AS kelas_ketua, j.cabang AS cabang_ketua, j.jurusan AS jurusan_ketua,cw.slogan,cw.visi,cw.misi,cw.paslon_nomor, (SELECT siswa.nama FROM siswa JOIN jurusan j ON j.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS nama_wakil, (SELECT siswa.jk FROM siswa JOIN jurusan jw ON jw.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS jk_wakil, (SELECT siswa.tgl_lahir FROM siswa JOIN jurusan jw ON jw.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS ttl_wakil, (SELECT jw.jurusan FROM siswa JOIN jurusan jw ON jw.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS jurusan_wakil, (SELECT jw.kelas FROM siswa JOIN jurusan jw ON jw.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS kelas_wakil, (SELECT jw.cabang FROM siswa JOIN jurusan jw ON jw.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS cabang_wakil,(SELECT siswa.foto FROM siswa JOIN jurusan jw ON jw.id=siswa.jurusan_id JOIN calon_wakil ON siswa.nrp=calon_wakil.nis_wakil WHERE calon_wakil.calon_id=k.id) AS foto_wakil, (((SELECT COUNT(*) FROM vote WHERE vote.calon_id=cw.id)/(SELECT COUNT(*) FROM vote))*100) AS persentase, (SELECT COUNT(*) FROM vote WHERE vote.calon_id=cw.id) AS person FROM (siswa s JOIN jurusan j ON s.jurusan_id=j.id) JOIN (ketua k JOIN calon_wakil cw ON k.id=cw.calon_id) ON s.nrp=k.nis_ketua where cw.id =". $request->input("idcalon"));  

        return response()->json($data);
    }
}
