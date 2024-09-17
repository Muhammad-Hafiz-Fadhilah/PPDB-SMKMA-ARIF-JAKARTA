<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    protected $table = "calon_siswa";

    public function nilai()
    {
    	return $this->hasOne('App\Models\Nilai','no_pendaftaran');
    }

}
