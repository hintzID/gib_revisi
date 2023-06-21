<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarTrip extends Model
{
    use HasFactory;

    protected $table = 'daftar_trip';

    protected $fillable = [
        'nama_trip',
        'keterangan',
    ];
}
