<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path'];
    public function User(){
        return $this->belongsTo(User::class);
    }
}
