<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';
    protected $fillable = ['nim','nama','profil','topik','email'];

    public function schedule(){
        return $this->hasOne(Schedule::class, 'nim_mahasiswa', 'nim');
    }
}
