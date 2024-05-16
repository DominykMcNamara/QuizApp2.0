<?php

    use Illuminate\Support\Facades\Route;
    use App\Models\Quiz;



    Route::get('/', function () {
        return view('home');
    });

    Route::get('/quizzes', function ()  {
      $quizzes = Quiz::all();
      return view('quizzes', ['quizzes' => $quizzes]);
    });

    Route::get('/quiz/{id}/questions', function ($id)  {
    $questions = Quiz::find($id)->questions()->simplePaginate(1);
        return view('quiz', ['questions' => $questions]);
    });

    Route::get('/register', function () {
        return view('auth.register');
    });
