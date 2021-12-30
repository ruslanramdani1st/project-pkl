<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kegiatan;
use App\Models\Uraian;

class Pengguna extends Model
{
    use HasFactory;

    public $table = 'penggunas';

    protected $fillable = [
        'id_user',
        'date',
        'jamDatang',
        'jamPulang',
        'jamLembur',
        'kegiatan_id',
        'uraian'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    public function uraians()
    {
        return $this->belongsTo(Uraian::class);
    }
}
