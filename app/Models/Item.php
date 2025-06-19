<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $table = "items";
    public $timestamps = false;

    protected $fillable = ['name', 'amount'];

    public function budgets(){
        return $this->hasMany(Budget::class);
    }
    
    public function sales(){
        return $this->hasMany(Sale::class);
    }
}
