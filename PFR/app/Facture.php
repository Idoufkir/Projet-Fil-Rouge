<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
        'Desc', 'Subject', 'ID_manager', 'ID_client','fonction','Status'
    ];
}
