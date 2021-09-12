<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    protected $table='games';
    protected $primaryKey = 'id';

    public function day() {
        return $this->belongsTo('App\Models\TalkshowDay', 'id_day');
    }
}
