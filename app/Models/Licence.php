<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class Licence extends Model
{
    use HasFactory, EncryptedAttribute;

    protected $fillable = [
        'id',
        'reference',
        'title',
        'description',
        'min',
        'max',
        'duration',
        'price',
        'is_premium',
        'is_private',
        'published_at',
        'archived_at',
        'created_at',
        'updated_at',
    ];

    public function is_archived() {
        if(!empty($this->archived_at)){return true;} else {return false;}
    }
    public function is_published() {
        if(!empty($this->published_at)){return true;} else {return false;}
    }
    public function is_premium() {
        return $this->is_premium;
    }
    public function is_private() {
        return $this->is_private;
    }

    protected $encryptable = [
        'title',
        'description',
    ];
}
