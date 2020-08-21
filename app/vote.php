<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    protected $table = 'vote';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'id','mhs_id','calon_id'
    ];
    public function siswa()
    {
        return $this->belongsTo('App\siswa', 'siswa_id');

    }
    public function jurusan()
    {
        return $this->belongsTo('App\jurusan', 'jurusan_id');

    }
    public function calon()
    {
        return $this->belongsTo('App\calon', 'calon_id');

    }
}
