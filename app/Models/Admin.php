<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi (tabel 'admins' bukan 'admins' secara default)
    protected $table = 'admins';

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Jika Anda ingin mengubah nama kolom 'created_at' dan 'updated_at' secara default
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
