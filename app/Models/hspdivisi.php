<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspdivisi extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket()
    {
        return $this->belongsTo(hsppaket::class);
    }

    public function hspkonstruksiumum()
    {
        return $this->hasMany(hspkonstruksiumum::class);
    }


}
