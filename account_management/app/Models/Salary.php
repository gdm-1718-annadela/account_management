<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salary';

    protected $fillable = [
        'field_salary_name',
        'field_salary_amount',
        'field_salary_system_name',
    ];

    public function variable(){
        return $this->belongsTo('App\Models\Variable');
    }
}
