<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;
    protected $table = 'opd';
    protected $fillable = ['nama','alamat','email','website'];

       // Relasi: satu OPD memiliki banyak user
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
