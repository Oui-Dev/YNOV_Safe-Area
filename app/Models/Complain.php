<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'title',
        'content',
        'file_url',
        'status_id',
        'is_urgent',
        'user_id',
        'user_reference',
        'complain_type_id',
        'assigned_to',
        'is_anonymous',
        'identity_request',
        'viewed_at',
        'closed_at',
        'deleted_at',
    ];

    public function complainType(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(ComplainType::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function assignedUser(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Status::class);
    }
}