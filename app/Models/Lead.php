<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lead extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'date',
        'client',
        'company',
        'coast',
        'origin',
        'state',
        'email',
        'phone',
        'description',
    ];

}
