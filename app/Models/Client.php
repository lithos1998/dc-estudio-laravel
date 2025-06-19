<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $table = "clients";
    public $timestamps = false;

    protected $fillable = ['name', 'lastname', 'fantasy_name','cuit', 'category', 'email', 'cel_phone', 'phone', 'address'];

    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }

    public function sales(){
        return $this->belongsToMany(Sale::class);
    }
}
