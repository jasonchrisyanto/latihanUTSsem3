<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;
    protected $table = 'EventRegistration';

    protected $fillable = [
        'nama',
        'nama_event',
        'tanggal_event',
        'nomor',
        'kategori',
    ];
}
