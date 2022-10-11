<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class Version extends Model
{
    use HasFactory, EncryptedAttribute;

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

    protected $hidden = [
        'name',
        'changelog',
    ];
}
