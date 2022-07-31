<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizes extends Model
{
    public function banner() {
        return $this->belongsTo(Media::class, 'banner_id');
    }
}
