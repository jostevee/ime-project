<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NGO extends Model
{
    use HasFactory;
    protected $table='ngo';
    protected $primaryKey = 'id';

    // public function ngo() {
    //     return $this->belongsTo('App\Models\Writer', 'id');
    // }
}
