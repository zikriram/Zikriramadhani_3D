<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table='berita';

    protected $fillable=[
        'judul', 'isi', 'users_id'
    ];

    protected $casts=[
        
    ];
}
