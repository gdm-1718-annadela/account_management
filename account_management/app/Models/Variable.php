<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    protected $table = 'expense';

    protected $fillable = [
        'field_expense_name',
        'field_expense_amount',
        'field_expense_increased',
        'category_id',
        'period_id',
    ];

    public function variable(){
        return $this->belongsTo('App\Models\Variable');
    }
}
