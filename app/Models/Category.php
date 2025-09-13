<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function mcqs()
    {
        return $this->hasMany(Mcq::class);
    }
}
