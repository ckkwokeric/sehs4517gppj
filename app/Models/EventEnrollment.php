<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\User;

class EventEnrollment extends Model
{
    use HasFactory;

    protected $table = 'event_enrollment';
    protected $primaryKey = 'enrollment_id';

    protected $fillable = ['user_id', 'evt_id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event() {
        return $this->belongsTo(Event::class, 'evt_id');
    }
}
