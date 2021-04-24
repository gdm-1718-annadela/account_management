<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
        'field_transaction_date',
        'field_transaction_desc',
        'field_transaction_increased',
        'field_transaction_amount',
    ];

    public function account() {
        return $this->belongsToMany('App\Models\Account');
    }

//    public function account(){
//        return $this->belongsTo('App\Models\Account');
//    }
}
