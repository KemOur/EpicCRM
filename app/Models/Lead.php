<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

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

    public static function getLead()
    {
        $records = DB::table('leads')->select('id','date','client','company','coast','origin','state','email','phone','description');
        return $records;
    }

}
