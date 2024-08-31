<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAnomali extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori'];

    public function anomalis()
    {
        return $this->hasMany(Anomali::class);
    }
}