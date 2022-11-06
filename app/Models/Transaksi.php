<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function mobil()
    {
        return $this->hasMany(Mobil::class);
    }

    public function kostumer()
    {
        return $this->belongsTo(Kostumer::class);
    }
}
