<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;

    // Add fillable property to allow mass assignment
    protected $fillable = ['nama_peralatan'];

    public function anomalis()
    {
        return $this->hasMany(Anomali::class);
    }
}