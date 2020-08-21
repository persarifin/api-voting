<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table='users';
    protected $primaryKey= 'id';
    protected $fillable=[
        'nama','email','jk','username','password'
    ];

    public function calon()
    {
        return $this->hasOne('App\calon');

    }
}
