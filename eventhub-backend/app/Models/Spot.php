<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    
    protected $fillable = ['event_id', 'is_reserved'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
