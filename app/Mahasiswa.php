<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    /**
     * Table primary key to define table id
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'niu',
        'nama',
        'prodi',
        'alamat',
    ];
    // public function matakuliah()
    // {
    //     return $this->hasOne('App\matakuliah','id_mk','id_mk');
    // }
}
