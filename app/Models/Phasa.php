<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phasa extends Model
{
    use HasFactory;

    protected $fillable = ['nama_phasa'];

    public function anomalis()
    {
        return $this->hasMany(Anomali::class);
    }
}