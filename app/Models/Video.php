<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Other;

class Video extends Model
{
    use HasFactory;

    public function others(){
        return $this->hasMany(Other::class, 'video_id');
    }
}
