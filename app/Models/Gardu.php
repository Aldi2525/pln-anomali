<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gardu extends Model
{
    use HasFactory;
    protected $fillable = ['nama_gardu'];


    public function bays()
    {
        return $this->hasMany(Bay::class);
    }
}

