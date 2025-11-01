<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subtransaksi extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function akunpengguna()
    {
        return $this->belongsTo(User::class, 'akunpengguna_id');
    }

    public function jenistransaksi()
    {
        return $this->belongsTo(jenistransaksi::class, 'jenistransaksi_id');
    }

}
