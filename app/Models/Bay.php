<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bay extends Model
{
    use HasFactory;

    // Tambahkan kolom yang diizinkan untuk mass assignment
    protected $fillable = [
        'gardu_id',
        'nama_bay',
    ];

    public function gardu()
    {
        return $this->belongsTo(Gardu::class);
    }

    public function anomalis()
    {
        return $this->hasMany(Anomali::class);
    }
}