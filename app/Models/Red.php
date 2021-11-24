<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    use HasFactory;
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
