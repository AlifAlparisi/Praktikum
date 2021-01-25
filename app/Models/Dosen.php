<?php 
namespace App\Models;

use App\Models\matkul;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 
class Dosen extends Model
{ 
    use HasFactory; 
    protected $table = 'dosen'; 
    protected $fillable = [ 
        'id', 
        'nama', 
        'matkul',
        'alamat',
     ];
     public function matkul()
     {
         return $this->belongsTo(matkul::class);
     }
}
