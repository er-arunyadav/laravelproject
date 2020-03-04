<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
     'invoice_number', 'total_amount' ,'status'
    ];


  
}