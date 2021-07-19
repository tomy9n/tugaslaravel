<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['user_id','npm','tempat_lahir','tgl_lahir','jenis_kelamin','telepon','alamat'];
    public $timestamps = false;


    public function user()
    {
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

    public function nilai()
    {
        return $this->hasOne(Nilai::class, 'mahasiswa_id','id');
    }

}