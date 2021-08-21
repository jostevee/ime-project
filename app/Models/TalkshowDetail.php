<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkshowDetail extends Model
{
    use HasFactory;
    protected $table = 'talkshow';
    protected $primaryKey = 'id';

    public function day() {
        return $this->belongsTo('App\Models\TalkshowDay', 'id_day');
    }

    public function speaker() {
        return $this->belongsTo('App\Models\Speaker', 'id_speaker');
    }
}
