<?php

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
                ],
                "4" => [
                    'title' => "Bahasa Inggris",
                    'deskripsi' => "Belajar grammar, vocabulary, dan speaking dengan metode menyenangkan dan cocok buat pemula.",
                    'img' => '/assets/mtk.png',
                    'link' => '/kursus/matematika'
                ]
            ]

        ]
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "api"=>[
            "1"=>[
            "title"=>"Tutorial menggunakan figma untuk pemula",
            "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
            "total"=>14,
            "type"=>"teknologi",
            "jenjang"=>"sekolah menengah atas"
            ],
            "2"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "3"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "4"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "5"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ]
        ]
    ]);
});

Route::get('/course', function () {
    return view('course', [
        "api"=>[
            "1"=>[
            "title"=>"Tutorial menggunakan figma untuk pemula",
            "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
            "total"=>14,
            "type"=>"teknologi",
            "jenjang"=>"sekolah menengah atas"
            ],
            "2"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "3"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "4"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "5"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ]
        ]
    ]) ;
});

Route::get('/quiz', function () {
    return view('quiz', [
        "api"=>[
            "1"=>[
            "title"=>"Tutorial menggunakan figma untuk pemula",
            "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
            "total"=>14,
            "type"=>"teknologi",
            "jenjang"=>"sekolah menengah atas"
            ],
            "2"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "3"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "4"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "5"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ]
        ]
    ]);
});

Route::get('/history', function () {
    return view('history', [
        "api"=>[
            "1"=>[
            "title"=>"Tutorial menggunakan figma untuk pemula",
            "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
            "total"=>14,
            "type"=>"teknologi",
            "jenjang"=>"sekolah menengah atas"
            ],
            "2"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "3"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "4"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
            ],
            "5"=>[
                "title"=>"Tutorial menggunakan figma untuk pemula",
                "description"=>"lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak...",
                "total"=>14,
                "type"=>"teknologi",
                "jenjang"=>"sekolah menengah atas"
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

    Auth::login($user);

    return redirect('/dashboard'); // atau kemana aja
});
