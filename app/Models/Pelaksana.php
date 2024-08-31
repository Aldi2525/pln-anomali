<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksana extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pelaksana'];

    public function anomalis()
    {
        return $this->hasMany(Anomali::class);
    }
}