<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'services';
    
    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }

    public function sales(){
        return $this->belongsToMany(Sale::class);
    }
}

