<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Matpel;

class Guru extends Model
{
    protected $table = 'gurus';

    protected $fillable = [
        'nama_guru',
        'email',
        'alamat'
    ];

    public function matpels()
    {
        return $this->belongsToMany(Matpel::class);
    }
}