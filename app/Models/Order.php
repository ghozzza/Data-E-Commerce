<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'status',
        'user_id',
        'uname',
        'email',
        'number',
        'schedule_id',
        'transaction_id',
        'order_id',
        'gross_amount',
        'payment_type',
        'payment_code',
        'pdf_url',
    ];
}
