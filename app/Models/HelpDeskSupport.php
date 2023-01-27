<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpdeskSupport extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'user_id',
        'title',
        'description',
        'file',
        'type',
        'status',
        'emergency',
        'started_at',
        'closed_at',
        'archived_at',
    ];

    public function ticketOwner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
