<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    public $table = "budgets";
    public $timestamps = false;

    protected $fillable = ['client_id', 'item_id', 'status', 'taxes', 'amount','discount', 'currency', 'created_at', 'expires_at', 'observations', 'details'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function taxes()
    {
        return $this->belongsToMany(Tax::class);
    }

    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
}
