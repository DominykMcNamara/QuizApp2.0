<?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/quizzes', function () {
        return view('quizzes', ['quizzes' =>
                [
                    [
                        'quiz' => 'HTML'
                    ],
                    [
                        'quiz' => 'CSS'
                    ],
                    [
                        'quiz' => 'Javascript'
                    ],
                    [
                        'quiz' => 'Accessibility'
                    ]
                ]
            ]
        );
    });

    Route::get('/register', function () {
        return view('auth.register');
    });
