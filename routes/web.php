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

    Route::get('/quiz/{id}', function ($id)  {

        return view('quiz', ['quiz' => Quiz::find($id)]);
    });

    Route::get('/register', function () {
        return view('auth.register');
    });
