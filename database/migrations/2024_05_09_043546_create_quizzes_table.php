<?php

    use App\Models\Answer;
    use App\Models\Question;
    use App\Models\Quiz;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use PhpOption\Option;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('quizzes', function (Blueprint $table) {
                $table->id();
                $table->string('title')->unique();
                $table->string('icon');
                $table->timestamps();
            });

            Schema::create('questions', function (Blueprint $table) {
                $table->id();
                $table->string('question_text');
                $table->timestamps();
            });

            Schema::create('question_quiz', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Quiz::class)->constrained()->onDelete('cascade');
                $table->foreignIdFor(Question::class)->constrained()->onDelete('cascade');
            });



            Schema::create('answers', function (Blueprint $table) {
                $table->id();
                $table->string('answer_text');
                $table->boolean('is_correct')->default(false);
                $table->timestamps();
            });
            Schema::create('answer_question', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Question::class)->constrained()->onDelete('cascade');
                $table->foreignIdFor(Answer::class)->constrained()->onDelete('cascade');
            });


        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('quizzes');
            Schema::dropIfExists('questions');
            Schema::dropIfExists('question_quiz');
            Schema::dropIfExists('answers');
            Schema::dropIfExists('question_answer');
        }
    };
