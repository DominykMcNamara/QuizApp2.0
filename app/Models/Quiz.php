<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Arr;

    class Quiz extends Model
    {
          use HasFactory;
            protected $fillable=['title', 'icon'];

            public function questions(): HasMany
            {
                return $this->hasMany(Question::class);
            }



    }
