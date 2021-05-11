<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "suratketerangan";

    protected $fillable = ['semester','tahun','nim','lembaga','pimpinan','no_telp','alamat','fax'];
}
