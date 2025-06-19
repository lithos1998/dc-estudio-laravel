<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuote extends Model
{
    use HasFactory;
    public $table = "cuotes";
    public $timestamps = false;

    protected $fillable = ['sale_id', 'number', 'amount', 'status', 'expires_at'];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
