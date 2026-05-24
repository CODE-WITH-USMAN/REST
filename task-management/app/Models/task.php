<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['person_id', 'title', 'description', 'is_completed'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
