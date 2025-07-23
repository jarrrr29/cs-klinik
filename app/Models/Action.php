<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Action extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}

