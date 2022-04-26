<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Member extends Authenticatable
{
    use HasFactory;

    protected $table = 'members';
    protected $primaryKey = 'mem_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'password',
        'phone_no',
        'dob'
    ];
}
