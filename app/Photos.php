<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = 'photos';

    protected $fillable = ['uri', 'public', 'height', 'width'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
