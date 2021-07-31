<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medpart extends Model
{
    use HasFactory;
    protected $table='medparts';
    protected $primaryKey = 'id';
}
