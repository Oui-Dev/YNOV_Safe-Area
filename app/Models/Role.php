<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

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
}
