<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class ComplainType extends Model{

    protected $fillable = [
        'name',
        'slug'
    ];


    public function complains() {
        return $this->hasMany(Complain::class);
    }

}
