<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class ActivityLog extends Model
{
    use HasFactory, EncryptedAttribute;

    protected $fillable = [
        'id',
        'type',
        'domain',
        'label',
        'user_id',
        'ip_address',
        'user_agent',
        'created_at',
        'updated_at',
    ];
    protected $encryptable = [
        'domain', 'label', 'user_agent'
    ];
}
