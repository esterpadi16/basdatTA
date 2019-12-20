<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LapPinjam extends Model
{
        /*
         * The table associated with the model.
         *
         * @var string
        */
        protected $table = 'lap_pinjam_ruang';
        public $timestamps = false;
        /**
         * 
         * Table primary key to define table id
         *
         * @var string
         */
        protected $primaryKey = 'id_pinjam';
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'id',
            'id_ruang',
            'id_mk',
            'tanggal_pinjam',
            'tanggal_input',
            'no_telp'
        ];
     
}
