<?php

    use App\Models\Question;
    use App\Models\Quiz;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {

        return view('home');

    });

    Route::get('/quizzes', function () {

        $quizzes = Quiz::all();

        return view('quizzes.index', ['quizzes' => $quizzes]);

    });

    Route::get('/quiz/{id}/questions', function ($id) {

        $quiz = Quiz::find($id);

        if ($quiz == null) {

            return redirect('/quizzes');

        }

        $questions = $quiz->questions()->simplePaginate(1);

        if ($questions->isEmpty()) {

            return redirect('/quizzes');

        }

        $answers = [];

        foreach ($questions as $question) {
            $answers = $question->answers;
        }

        return view('quizzes.quiz',
            [
                'quiz' => $quiz,
                'questions' => $questions,
                'answers' => $answers
            ]);
    });

   Route::get('/questions/create', function () {
       return view('questions.create', ['quizzes' => Quiz::all()]);
   });

    Route::get('/register', function () {

        return view('auth.register');

    });
