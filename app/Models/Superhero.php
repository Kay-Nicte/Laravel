<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;
    protected $fillable=['realname'];

    public function planet(){
        return $this->belongsTo(Planet::class);
    }
}
