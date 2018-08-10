<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'middle_name', 'email',
        'specialization_id', 'degree_id',
        'description', 'reception_at', 'is_paid',
    ];

    protected $dates = ['reception_at'];

    protected $casts = [
        'is_paid' => 'boolean',
    ];

    public function getFullNameAttribute()
    {
        return join(' ', [$this->last_name, $this->first_name, $this->middle_name]);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class);
    }
}
