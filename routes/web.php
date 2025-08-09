<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeminiController;
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
                    'title' => "Matematika",
                    'deskripsi' => "Pelajari konsep dasar hingga lanjutan seperti aljabar, geometri, dan statistika secara mudah dan interaktif.",
                    'img' => '/assets/mtk.png',
                    'link' => '/kursus/matematika'
                ],
                "2" => [
                    'title' => "Ilmu Pengetahuan Alam (IPA)",
                    'deskripsi' => "Kenali dunia sains dari fisika, kimia, hingga biologi yang dikemas dengan contoh kehidupan nyata.",
                    'img' => '/assets/mtk.png',
                    'link' => '/kursus/matematika'
                ],
                "3" => [
                    'title' => "Bahasa Indonesia",
                    'deskripsi' => "Tingkatkan kemampuan membaca, menulis, dan memahami bahasa Indonesia dengan materi yang ringkas dan jelas.",
                    'img' => '/assets/mtk.png',
                    'link' => '/kursus/matematika'
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
