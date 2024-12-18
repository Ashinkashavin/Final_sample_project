<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    // Specify the table name 
    protected $table = 'vehicles';

    // Allow mass assignment for these fields
    protected $fillable = ['make', 'model', 'year', 'price'];
}
