<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'id_kloter', 'notelp', 'alamat'];

    public function kloter()
    {

        return $this->belongsTo(Kloter::class, 'list_member');
    }
}
