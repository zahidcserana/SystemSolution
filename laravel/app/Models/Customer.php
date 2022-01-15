<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    const BILL_TYPE_MONTHLY = 'monthly';
    const BILL_TYPE_YEARLY = 'yearly';


    protected $guarded = [];
}
