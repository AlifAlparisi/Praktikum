<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    use HasFactory;
    public function Dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}
