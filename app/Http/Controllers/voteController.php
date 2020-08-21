<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vote;
use App\up_vote;
use App\siswa;
use App\jurusan;
use DB;
class voteController extends Controller
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
        $halaman = 'vote';
        $notvote = DB::select("SELECT * FROM siswa JOIN vote ON 
        siswa.nrp=vote.siswa_id JOIN jurusan ON siswa.jurusan_id=jurusan.id 
        where siswa.nrp != vote.siswa_id ");
        // dd($notvote);
        $vote_list= vote::with('siswa')
                        ->with('jurusan')->get();
        $up = up_vote::all();
        // dd($raw);
                    
        return view('vote.vote', compact('halaman','vote_list','notvote','up'));
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
    public function show(Request $request)
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
        vote :: whereNotNull ('id') -> delete ();
        // vote::truncate();
        return redirect('vote')
        ->with('success', 'Data is successfully deleted');
    }
    
    public function get()
    {
        $data = vote::all();
        $data = DB::delete("DELETE FROM up_vote WHERE id NotNull");
        return redirect('vote');
    }
}
