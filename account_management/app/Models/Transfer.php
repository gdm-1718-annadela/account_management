<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table = 'account_transaction';

    protected $fillable = [
        'account_id',
        'transaction_id',
    ];
}
