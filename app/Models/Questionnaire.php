<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    protected $table = 'questionnaire';

    protected $fillable = [
        'id_poste',
        'type',
        'question',

    ];
    
}
