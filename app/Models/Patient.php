<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'birth_date', 'whatsapp_number'];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}

