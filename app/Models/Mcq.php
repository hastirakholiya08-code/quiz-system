<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'answer',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
