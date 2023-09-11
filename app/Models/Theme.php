<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $table = 'themes';

    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function questions(){
        return $this->hasMany('App\Models\Question');
    }
}
