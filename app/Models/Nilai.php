<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{

        protected $table = "nilai";

        public function calon_siswa()
    {
    	return $this->belongsTo('App\Models\CalonSiswa','no_pendaftaran');
    }
}
