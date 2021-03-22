<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = 'period';

    protected $fillable = [
        'field_period_name',
        'field_period_multiplier',
    ];

    public function variable(){
        return $this->belongsTo('App\Models\Variable');
    }
}
