<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    /**
     * Table primary key to define table id
     *
     * @var string
     */
    protected $primaryKey = 'id_mk';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_mk',
        'dosen',
    ];
    // public function matakuliah()
    // {
    //     return $this->hasOne('App\matakuliah','id_mk','id_mk');
    // }
}
