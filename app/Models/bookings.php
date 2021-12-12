<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'starttime', 'endtime', 'type'];

    public function rooms() {
        return $this->hasMany(Rooms::class);
    }

    public function user() {
        return $this->hasMany(User::class);
    }
}
