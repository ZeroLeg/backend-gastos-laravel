<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acount extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'salary', 'date'];

    public function amounts()
    {
        return $this->hasMany(Amount::class);
    }
}
