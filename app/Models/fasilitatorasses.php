<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class fasilitatorasses extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function bantuanhibahbg()
    {
        return $this->hasMany(bantuanhibahbg::class, 'bantuanhibahbg_id');
    }

    public function namafasilitator()
    {
        return $this->belongsTo(namafasilitator::class, 'namafasilitator_id');
    }

}
