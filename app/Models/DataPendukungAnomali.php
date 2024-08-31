<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendukungAnomali extends Model
{
    use HasFactory;

    public function anomali()
    {
        return $this->belongsTo(Anomali::class);
    }
}
