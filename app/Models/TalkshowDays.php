<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkshowDays extends Model
{
    use HasFactory;
    protected $table='talkshow_days';
    protected $primaryKey = 'id';

    public function details() {
        return $this->belongsTo('App\Models\TalkshowDetails', 'id');
    }
}
