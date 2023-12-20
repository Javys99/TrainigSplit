<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table = 'plan';
        protected $fillable = [
        'plan',
        ];

    public function cliente()
    {
        return $this->hasMany(User::class);
    }
}
