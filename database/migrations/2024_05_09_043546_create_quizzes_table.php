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

        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('quizzes');
        }
    };
