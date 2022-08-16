<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'customer_id',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class); //relacion uno a uno
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id'); // muchos a unos
    }

    public function products()
    {
        return $this-> morphToMany(Product:: class, 'productable')->withPivot('quantity');
    }
}
