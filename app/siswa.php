<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nrp';
    protected $fillable = [
        'nrp','nama','jurusan_id','jk','foto','kelas','tgl_lahir'
    ];

    public function jurusan()
    {
        return $this->belongsTo('App\jurusan', 'jurusan_id');

    }
    public function vote()
    {
        return $this->hasOne('App\vote');

    }
    public function calon()
    {
        return $this->hasMany('App\calon');

    }
    public function ketua()
    {
        return $this->hasMany('App\ketua');

    }
    

}
