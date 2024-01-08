<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    //protected $filllable = ['nama_mahasiswa','nim','prodi','alamat'];
    protected $guarded = [];

}
