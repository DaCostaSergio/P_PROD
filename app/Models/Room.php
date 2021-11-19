<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Record;

class Room extends Model
{
    use HasFactory;

    public function records($type)
    {
        return $this->hasMany(Record::class)->where('type',$type);
    }
}
