<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class Role extends Model
{
    use HasFactory,EncryptedAttribute;

    protected $fillable = [
        'id',
        'label',
        'compagny_id',
        'is_system',
        'archived_at',
        'created_at',
        'updated_at',

    ];

    public function users() {
        return $this->belongsToMany(User::class, 'role_user');
    }

    protected $encryptable = [
        'label',
    ];
}
