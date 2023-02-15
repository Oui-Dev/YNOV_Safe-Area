<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

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
}
