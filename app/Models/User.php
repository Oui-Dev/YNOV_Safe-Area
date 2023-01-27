<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use ESolution\DBEncryption\Traits\EncryptedAttribute;
use Spatie\Permission\Traits\HasRoles;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

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
        'company_id',
        'identifiant',
        'reference',
        'sex',
        'firstname',
        'password',
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
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

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

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function complains() {
        return $this->hasMany(Complain::class);
    }

    public function assignedComplains() {
        return $this->hasMany(Complain::class);
    }

    public function helpdeskSupports() {
        return $this->hasMany(HelpdeskSupport::class);
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

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
    }

}
