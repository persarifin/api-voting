<?php

namespace App\Http\Controllers\Api;
use App\siswa;
use App\up_vote;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class siswaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $siswa = DB::table('siswa')
                        ->join('jurusan','siswa.jurusan_id','=','jurusan.id')
                        ->where('siswa.nrp', '=', $request->input('nrp'))
                        ->get();     
        $up = up_vote::all();

        
        
        if ($up->count()==1){
            if($siswa->count()==1)
            return response()->json($siswa);
            else
            return response()->json($siswa, 401);
        }
        else
            return response()->json($siswa, 404);
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
}
