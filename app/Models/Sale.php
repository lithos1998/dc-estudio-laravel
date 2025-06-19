<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['budget_id', 'user_id', 'number', 'type', 'status','created_at', 'expires_at'];

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cuotes()
    {
        return $this->hasMany(Cuote::class);
    }
}
