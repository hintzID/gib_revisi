<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pondok extends Model
{
    use HasFactory;

    protected $table = 'pondok';

    protected $fillable = [
        'calon_mitra_id',
        'rencana_penyaluran',
        'contact_person',
        'no_hp_contact_person',
        'keterangan',
    ];

    public function calonMitra()
    {
        return $this->belongsTo(CalonMitra::class);
    }
}
