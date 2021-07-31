<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NGO extends Model
{
    use HasFactory;
    protected $table='faqs';
    protected $primaryKey = 'id';

    public function writer() {
        return $this->belongsTo('App\Models\Writer', 'id');
    }
}
