<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkshowDetail extends Model
{
    use HasFactory;
    protected $table='talkshow';
    protected $primaryKey = 'id';

    public function details() {
        return $this->hasMany('App\Models\TalkshowDay', 'id_talkshow');
    }
}
