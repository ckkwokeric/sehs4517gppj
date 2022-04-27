<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venue;
use App\Models\EventEnrollment;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'evt_id';

    public function venues() {
        return $this->hasMany(Venue::class,'venue_id');
    }

    public function eventenrolls() {
        return $this->hasMany(EventEnrollment::class, 'evt_id');
    }
}
