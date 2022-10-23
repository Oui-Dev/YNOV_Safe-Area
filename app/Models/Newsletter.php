<?php

namespace App\Models;

use ESolution\DBEncryption\Traits\EncryptedAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory, EncryptedAttribute;
    protected $fillable = [
        'id',
        'email',
        'archived_at',
        'created_at',
        'updated_at',
    ];
    protected $encryptable = [
        'email',
    ];
}
