<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeminiController;
use App\Http\Controllers\HistoryController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('index', [
        'data' => [
            'program' => [
                "1" => [
                    "title" => "Mentor Berpengalaman",
                    "deskripsi" => "Belajar langsung dari mentor yang udah ahli di bidangnya & aktif di industri."
                ],
                "2" => [
                    "title" => "Akses Gratis 100%",
                    "deskripsi" => "Semua materi bisa kamu akses tanpa bayar, tanpa batas waktu, tanpa daftar pun bisa langsung belajar."
                ],
                "3" => [
                    "title" => "Belajar Fleksibel",
                    "deskripsi" => "Bisa belajar dari HP/laptop, kapan pun & di mana pun. Bebas stress."
                ]
            ],
            'materi-unggulan' => [
                "1" => [
                    'title' => "UI/UX Design for Beginners",
                    'deskripsi' => "Kuasai fundamental desain antarmuka dan pengalaman pengguna (UI/UX). Belajar tentang wireframing, prototyping, riset pengguna, dan cara membuat desain yang disukai pengguna",
                    'img' => 'https://jayjay.co/wp-content/uploads/2025/02/1-2-scaled.jpg',
                    'link' => '/content/12/materi/8'
                ],
                "2" => [
                    'title' => "Full-Stack Web Development Bootcamp",
                    'deskripsi' => "Pelajari cara membangun aplikasi web modern dari awal. Materi mencakup HTML, CSS, JavaScript, React, Node.js, dan database untuk menjadi seorang developer handal.",
                    'img' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=1169&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'link' => '/content/11/materi/1'
                ],
                "3" => [
                    'title' => "Introduction to Data Science
",
                    'deskripsi' => "Selami dunia data science. Pelajari Python untuk analisis data, algoritma machine learning, dan teknik visualisasi data untuk mengubah data menjadi wawasan berharga.",
                    'img' => 'https://images.unsplash.com/photo-1666875753105-c63a6f3bdc86?q=80&w=1173&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'link' => '/content/14/materi/4'
                ]
            ]
        ]
    ]);
});



Route::get('/auth/redirect/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();
    $avatar =  $googleUser->getAvatar();
    $user = User::updateOrCreate([
        'email' => $googleUser->getEmail(),
    ], [
        'name' => $googleUser->getName(),
        'google_id' => $googleUser->getId(),
        'avatar' => $avatar,
    ]);

    Session::put('user_id', $user->id);
    Session::put('user_avatar', $user->avatar);

    return redirect('/dashboard'); // atau kemana aja
});

Route::get('ambil', function () {
    return session('user_id');
});

Route::get('logout', function () {
    Session::flush();
    return redirect('/');
});

Route::resource('dashboard', DashboardController::class)->middleware('checkSession');

Route::resource('/course', CourseController::class)->middleware('checkSession');
Route::get('/find', [CourseController::class, 'search'])->name('course.search')->middleware('checkSession');

Route::get('/content/{id}/materi/{materi_id?}', [ContentController::class, 'show'])->middleware('checkSession');
Route::get('/chat', function () {
    return view('chat');
})->middleware('checkSession');

// Route API untuk diakses oleh JavaScript, mengarah ke method baru kita
Route::post('/ask-gemini-direct', [GeminiController::class, 'askDirect'])->name('gemini.ask.direct');

Route::get('/history', [HistoryController::class, 'index'])->middleware('checkSession');
