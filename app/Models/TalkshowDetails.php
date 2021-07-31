<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkshowDetails extends Model
{
    use HasFactory;
    protected $table='talkshow_details';
    protected $primaryKey = 'id';

    public function details() {
        return $this->hasMany('App\Models\TalkshowDays', 'id_talkshow');
    }
}
