<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anomali extends Model
{
    use HasFactory;

    public function bay()
    {
        return $this->belongsTo(Bay::class);
    }

    public function peralatan()
    {
        return $this->belongsTo(Peralatan::class);
    }

    public function phasa()
    {
        return $this->belongsTo(Phasa::class);
    }

    public function kategoriAnomali()
    {
        return $this->belongsTo(KategoriAnomali::class);
    }

    public function pelaksana()
    {
        return $this->belongsTo(Pelaksana::class);
    }

    public function dataPendukungAnomalis()
    {
        return $this->hasMany(DataPendukungAnomali::class);
    }
}
