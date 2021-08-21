<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkshowSpeaker extends Model
{
    use HasFactory;
    protected $table = 'talkshow_speaker';
    protected $primaryKey = 'id';

    public function talkshow_detail() {
        return $this->hasMany('App\Models\TalkshowDetail', 'id_speaker');
    }

    // public function ngo() {
    //     return $this->belongsTo('App\Models\Writer', 'id');
    // }
}
