<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='kelas';
    protected $fillable=['kelas'];

    public function toSiswa(){
        return $this->hasMany(Siswa::class, 'kelas_id','id');
    }
}
