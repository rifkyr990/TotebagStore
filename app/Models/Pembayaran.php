<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Order;

class Pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_pembayaran',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'status_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'status_id', 'id');
    }

}
