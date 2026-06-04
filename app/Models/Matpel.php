<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;

class Matpel extends Model
{
    protected $table = 'matpels';

    protected $fillable = [
        'nama_matpel'
    ];

    public function gurus()
    {
        return $this->belongsToMany(Guru::class);
    }
}