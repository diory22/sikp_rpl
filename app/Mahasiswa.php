<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Mahasiswa extends Model
{
    protected $table = "suratketerangan";

    protected $fillable = ['semester','tahun','nim','lembaga','pimpinan','no_telp','alamat','fax'];
}

public function getCreatedAttribute()
{
    return Carbon::parse($this->attributes['created_at'])
    ->translatedFormat('l, d F Y');
}
