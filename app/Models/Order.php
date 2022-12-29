<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Material;
use App\Models\Size;
use App\Models\Pembayaran;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'material_id',
        'color_id',
        'size_id',
        'quantity',
        'customer_id',
        'design',
    ];

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
