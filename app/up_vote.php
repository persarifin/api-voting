<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class up_vote extends Model
{
    protected $table = 'up_vote';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','status','admin_id'
    ];
}
