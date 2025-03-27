<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    protected $fillable = ['name', 'hobbies', 'entry_date'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
    // app/Models/Teacher.php
    protected $casts = [
        'entry_date' => 'date',
    ];
}
