<?php

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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
