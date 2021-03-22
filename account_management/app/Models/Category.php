<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'field_category_name',
    ];

    public function expense(){
        return $this->belongsTo('App\Models\Expense');
    }

}
