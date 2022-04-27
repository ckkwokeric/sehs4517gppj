<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venue;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'evt_id';

    public function venues() {
        return $this->hasMany(Venue::class);
    }
}
