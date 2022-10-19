<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use ESolution\DBEncryption\Traits\EncryptedAttribute;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, EncryptedAttribute, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'compagny_id',
        'identifiant',
        'password',
        'reference',
        'sex',
        'firstname',
        'lastname',
        'personal_email',
        'professional_email',
        'phone',
        'personal_email_verified_at',
        'professional_email_verified_at',
        'archived_at',
        'blocked_at',
        'created_at',
        'updated_at',
    ];

    public function company() {
        return $this->belongsTo(Company::class, 'compagny_id');
    }

    public function is_blocked() {
        if(!empty($this->blocked_at)){return true;} else {return false;}
    }
    public function is_archived() {
        if(!empty($this->archived_at)){return true;} else {return false;}
    }
    public function is_personal_email_verified() {
        if(!empty($this->personal_email_verified_at)){return true;} else {return false;}
    }
    public function is_professional_email_verified() {
        if(!empty($this->professional_email_verified_at)){return true;} else {return false;}
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $encryptable = [
        'label',
    ];
}
