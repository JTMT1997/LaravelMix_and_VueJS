<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table="siswa";
    protected $fillable=['nama_siswa','alamat','kelas_id'];
    

    public function toKelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id','id');
    }
}
