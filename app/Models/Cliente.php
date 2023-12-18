<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente_online';
        protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'correo_verificacion',
        'contrasenia',
        'foto_perfil',
        'foto_progreso'];

        public function setPasswordAttribute($pass){
            $this->attributes['password'] = bcrypt($pass);
        }
}
