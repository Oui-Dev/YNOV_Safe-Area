<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'screen_url',
        'status',
        'urgency',
        'user_id',
        'user_reference',
        'complain_type_id',
        'assigned_to',
        'is_anonymous',
        'viewed_at',
        'closed_at',
        'deleted_at',
    ];

    public function complainType() {
        return $this->belongsTo(ComplainType::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function assignedUser() {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}