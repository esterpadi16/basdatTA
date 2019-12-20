<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';
    /**
     * Table primary key to define table id
     *
     * @var string
     */
    protected $primaryKey = 'id_ruang';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_ruang',
        'kapasitas',
        'gedung',
    ];
    // public function matakuliah()
    // {
    //     return $this->hasOne('App\matakuliah','id_mk','id_mk');
    // }
}
