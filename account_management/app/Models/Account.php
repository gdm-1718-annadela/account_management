<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';

    protected $fillable = [
        'field_account_name',
        'field_account_desc',
        'field_account_total_amount',
    ];
}
