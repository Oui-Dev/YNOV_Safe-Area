<?php

namespace App\Models;

use ESolution\DBEncryption\Traits\EncryptedAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory, EncryptedAttribute;
    const UPDATED_AT = null;

    protected $fillable = [
        'email',
        'token'
    ];

    protected $encryptable = [
        'email',
    ];
}
