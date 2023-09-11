<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'id',
        'name',
        'questionOne',
        'questionTwo',
        'questionThree',
        'questionFour',
        'rightQuestion',
        'theme_id'
    ];

    public function theme(){
        return $this->belongsTo('App\Models\Theme','theme_id');
    }
}
