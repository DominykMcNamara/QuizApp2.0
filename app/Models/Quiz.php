<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Quiz extends Model
    {
        use HasFactory;

        protected $fillable = ['title', 'icon'];

        public function questions(): HasMany
        {
            return $this->hasMany(Question::class);
        }

        public function answers(): HasMany
        {
            return $this->hasMany(Answer::class);
        }

        public function userResponses(): HasMany
        {
            return $this->hasMany(UserResponse::class);

        }


    }
