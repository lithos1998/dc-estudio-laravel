<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;
    public $table = "taxes";
    public $timestamps = false;

    protected $fillable = ['name', 'amount'];

    public function budgets(){
        return $this->belongsToMany(Budget::class);
    }

    public function sales(){
        return $this->belongsToMany(Sale::class);
    }
}
