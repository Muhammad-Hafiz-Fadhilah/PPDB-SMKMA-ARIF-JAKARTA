<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    protected $table = "ijazah";
 
    protected $fillable = ['file','foto_calon_siswa','no_pendaftaran'];
}
