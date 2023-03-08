<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'color'
    ];

    public function complains(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Complain::class);
    }

    public function helpDeskSupports(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HelpDeskSupport::class);
    }
}