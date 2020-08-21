<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calon extends Model
{
    protected $table = 'calon_wakil';
    protected $primaryKey= 'id';
    protected $fillable = [
        'admin_id','foto_paslon','siswa_id','nis_wakil','nama_wakil','visi','misi','slogan'
    ];
    public function admin()
    {
        return $this->belongsTo('App\admin', 'admin_id');

    }
    
    public function ketua()
    {
        return $this->belongsTo('App\ketua', 'calon_id');

    }
    public function siswa()
    {
        return $this->belongsTo('App\siswa', 'nis_wakil');

    }
    public function vote()
    {
        return $this->hasOne('App\vote');

    }
    
}
