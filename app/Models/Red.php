<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Red extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        "SSID",
        "Contraseña",
        "Usuario_Creador",
        "Email_Creador",
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
