<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkshowDay extends Model
{
    use HasFactory;
    protected $table = 'talkshow_day';
    protected $primaryKey = 'id';

    public function talkshow_detail() {
        return $this->hasMany('App\Models\TalkshowDetail', 'id_day');
    }
}
