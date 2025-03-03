<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profilpaketpekerjaannontender extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function prosespaketnontender()
    {
        return $this->belongsTo(prosespaketnontender::class);
    }

    public function profiljenispekerjaan()
    {
        return $this->belongsTo(profiljenispekerjaan::class);
    }

    public function sumberdana()
    {
        return $this->belongsTo(sumberdana::class);
    }
}
