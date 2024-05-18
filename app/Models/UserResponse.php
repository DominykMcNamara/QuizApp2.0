<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class UserResponse extends Model
    {
        use HasFactory;

        protected $fillable = ['question_id', 'answer_id', 'user_id', 'quiz_id'];

        public function quiz(): BelongsTo
        {
            return $this->belongsTo(Quiz::class);
        }

        public function question(): BelongsTo
        {
            return $this->belongsTo(Question::class);
        }

        public function answer(): BelongsTo
        {
            return $this->belongsTo(Answer::class);
        }

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    }
