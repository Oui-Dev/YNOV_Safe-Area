<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class CategorySupport extends Model
{
    use HasFactory, EncryptedAttribute;
    protected $fillable = [
        'id',
        'label',
        'company_id',
        'archived_at',
        'created_at',
        'updated_at',
    ];
    protected $encryptable = [
        'label',
    ];
}
