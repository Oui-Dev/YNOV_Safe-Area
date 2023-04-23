<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplainChat extends Model
{
    use HasFactory;

    protected $fillable = [
        'complain_id',
        'user_id',
        'content',
        'screen_url',
    ];

    public function complain(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Complain::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(User::class);
    }
}