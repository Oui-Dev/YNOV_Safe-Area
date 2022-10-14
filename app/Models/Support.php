<?php

namespace App\Models;

use ESolution\DBEncryption\Traits\EncryptedAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory, EncryptedAttribute;
    protected $fillable = [
        'id',
        'reference',
        'source',
        'type',
        'category_id',
        'emergency',
        'user_id',
        'lastname',
        'email',
        'phone',
        'description',
        'file',
        'status',

        'attributed_to',
        'attributed_at',
        'observator_id',
        'validated_at',
        'started_at',
        'closed_at',

        'archived_at',
        'created_at',
        'updated_at',
    ];
    protected $encryptable = [
        'lastname',
        'email',
        'phone',
        'description',
        'file',
    ];
}
