<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function statusadmin()
    {
        return $this->belongsTo(statusadmin::class);
    }

    public function krkusaha()
    {
        return $this->hasMany(krkusaha::class);
    }

    public function krkhunian()
    {
        return $this->hasMany(krkhunian::class);
    }

    public function krkkeagamaan()
    {
        return $this->hasMany(krkkeagamaan::class);
    }

    public function bantuanteknis()
    {
        return $this->hasMany(bantuanteknis::class);
    }

    public function asistensibantek()
    {
        return $this->hasMany(asistensibantek::class);
    }

    public function bujkkonsultan()
    {
        return $this->hasMany(bujkkonsultan::class);
    }

    public function bantuanhibahbg()
    {
        return $this->hasMany(bantuanhibahbg::class);
    }

    public function penilikbangunan()
    {
        return $this->hasMany(penilikbangunan::class);
    }

}
