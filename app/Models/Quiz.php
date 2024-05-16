<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Arr;

    class Quiz extends Model
    {
          use HasFactory;
            protected $fillable=['title', 'icon'];

            public function questions() {
                return $this->belongsToMany(Question::class);
            }



    }