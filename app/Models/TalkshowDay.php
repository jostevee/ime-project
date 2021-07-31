<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkshowDay extends Model
{
    use HasFactory;
    protected $table='talkshow_day';
    protected $primaryKey = 'id';

    public function details() {
        return $this->belongsTo('App\Models\TalkshowDetail', 'id');
    }
}
