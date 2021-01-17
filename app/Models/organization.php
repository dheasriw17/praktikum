<?php

namespace App\Models;

use App\Models\Mahasiswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $table = 'organization';
    public function Mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }
}
