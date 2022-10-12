<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class Company extends Model
{
    use HasFactory, EncryptedAttribute;

    protected $fillable = [
        'id',
        'reference',
        'name',
        'address_id',
        'city_id',
        'siren',
        'siret',
        'email',
        'phone',
        'email_verified_at',
        'user_owner',
        'published_at',
        'archived_at',
        'created_at',
        'updated_at',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    protected $encryptable = [
        'name',
        'address_id',
        'city_id',
        'siren',
        'siret',
        'email',
        'phone',
    ];
}
