<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'job_title',
        'bio',
        'country',
        'domain',
        'birth_date',
        'type',
        'salary',
        'user_id'

    ];
}
