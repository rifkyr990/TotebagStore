<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pembayaran;
use App\Models\Status;
use App\Models\Color;
use App\Models\Size;

class Cart extends Model
{
    use HasFactory;

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
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
