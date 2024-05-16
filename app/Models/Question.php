<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable =
        ['title'];

    public function quizzes() {
        return $this->belongsToMany(Quiz::class);
    }

    public function answers() {
        return $this->belongsToMany(Answer::class);
    }

}
