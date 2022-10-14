<?php

namespace App\Models;

use ESolution\DBEncryption\Traits\EncryptedAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackSupport extends Model
{
    use HasFactory, EncryptedAttribute;
    protected $fillable = [
        'id',
        'support_id',
        'user_id',
        'text',
        'archived_at',
        'created_at',
        'updated_at',
    ];
    protected $encryptable = [
        'text',
    ];
}
