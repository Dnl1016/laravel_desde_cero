<?php

namespace App\Models;

use App\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
