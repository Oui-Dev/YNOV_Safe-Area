<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'generation',
        'revision',
        'correction',
        'changelog',
        'archived_at',
        'created_at',
        'updated_at',
    ];

    public function is_archived() {
        return !empty($this->archived_at);
    }

    public function is_updated() {
        return $this->updated_at > $this->created_at;
    }

    static public function active() {
        return Version::where('archived_at', null)->first();
    }
}
