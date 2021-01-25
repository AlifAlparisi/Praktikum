<?php 

namespace App\Models;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'npm',
        'nama',  
        'class',
        'alamat', 
        'organization_id',
    ];
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    }