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

    public function is_archived()
    {if(!empty($this->archived_at)){return true;} else {return false;}}

    static public function active()
    {
        return Version::where('archived_at',null)->first();
    }
}
