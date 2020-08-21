<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey= 'id';
    protected $fillable = [
        'id','jurusan','kelas','cabang'
    ];

    public function siswa()
    {
        return $this->hasMany('App\siswa');
    }
    public function vote()
    {
        return $this->hasOne('App\vote');

    }
}
