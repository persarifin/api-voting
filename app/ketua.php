<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ketua extends Model
{
    protected $table = 'ketua';
    protected $primaryKey= 'id';
    protected $fillable = [
        'nis_ketua','nama_ketua'
    ];
    public function calon()
    {
        return $this->hasOne('App\calon');

    }
    public function siswa()
    {
        return $this->belongsTo('App\siswa', 'nis_ketua');

    }
}
