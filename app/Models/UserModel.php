<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Casts\Attribute;

class UserModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    // Menambahkan kolom yang diizinkan untuk diisi secara massal
    protected $fillable = [
        'username',
        'nama', // Pastikan ini sesuai dengan nama kolom di database, misalnya 'nama' jika nama kolomnya memang 'nama'
        'password',
        'level_id',
        'image',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id');
    }

    protected function image() : Attribute {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
