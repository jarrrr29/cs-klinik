<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'action_id', 'schedule_date', 'schedule_time', 'status'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function action()
    {
        return $this->belongsTo(Action::class);
    }
}

