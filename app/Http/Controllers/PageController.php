<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;
        return view('dashboard', ['username' => $username]);
    }

    public function pengelolaan()
    {
        $items = [
            [
                'nama' => 'Espreso Based',
                'gambar' => 'images/espreso.png',
                'deskripsi' => 'Pertama Kali membuka dengan pahit, Diam-Diam Suka hangat di hati. Rindu Tak Bernama, manis yang mengingatkan. Terlalu Dalam, mocha penuh perasaan. Akhir Yang Hangat, sederhana tapi berkesan.',
            ],

            [
                'nama' => 'Signature KoMi',
                'gambar' => 'images/signature.png',
                'deskripsi' => 'Sebagaimana perasaan yang tumbuh perlahan, Latte KoMi menyapa dengan kelembutan susu yang menyatu sempurna dengan espresso. Seperti kenangan manis yang tak lekang oleh waktu, setiap tegukan membawa kehangatan yang menenangkan, membiarkanmu merasa di rumah, di setiap cangkirnya.',
            ],

            [
                'nama' => 'Iced Caramel Macchiato',
                'gambar' => 'images/macchiato.jpg',
                'deskripsi' => 'Lelah Tapi Rindu kau datang tak buru-buru, duduk diam di gelas bening —pahit yang jujur, manis yang terlambat, seperti aku, yang tak pernah benar-benar bisa pergi.',
            ],

            [
                'nama' => 'Iced Black Coffee',
                'gambar' => 'images/Iced black coffee.png',
                'deskripsi' => 'Hampir Pulang dinginmu tak membeku, tapi cukup membuat sadar — tak semua yang gelap harus ditakuti, kadang justru itulah yang membuat kita pulang.',
            ],

            [
                'nama' => 'Cold Brew Vanilla',
                'gambar' => 'images/cold brew vanilla.png',
                'deskripsi' => 'Kamu di Bulan Juli dinginmu menenangkan, manismu datang perlahan—seperti pesan larut malam, yang tak perlu dibalas, cukup membuat hati tenang.',
            ],

            [
                'nama' => 'Americano',
                'gambar' => 'images/americano.png',
                'deskripsi' => 'Menunggu Pagi hitamnya tak menakutkan, ia jujur, seperti pagi tanpa kata—hanya tatapan, dan segelas harap yang perlahan menghangatkan.',
            ],

            [
                'nama' => 'Frappe',
                'gambar' => 'images/frape.png',
                'deskripsi' => 'Tersenyum Sendiri dingin, manis, riuh di lidah — seperti tawa yang kau tahan saat ingat sesuatu yang tak pernah jadi apa-apa, tapi tetap hangat di dada.',
            ],

            [
                'nama' => 'Iced Chocolate',
                'gambar' => 'images/chocolate.jpeg',
                'deskripsi' => 'Setenang Kamu tak berisik, tak bergejolak — dinginmu mendamaikan, manismu tak meminta balas, cukup hadir, cukup jadi tenang.',
            ],


        ];
        return view('pengelolaan', compact('items'));
    }

    public function profile(Request $request)
    {
        $user = collect([
            [
                "name" => "Aji",
                "email" => "ajin@gmail.com",
                "username" => "Aji123",
                "favorite" => "Iced Caramel Macchiato",
            ],
            [
                "name" => "Budi",
                "email" => "Budi@gmail.com",
                "username" => "Budi123",
                "favorite" => "Iced Black Coffee",
            ]
        ]);

        $user = $user->firstWhere('username', $request->username);
        return view('profile', [
            'username' => $request->username,
            "name"=> isset($user) ? $user['name'] : "",
            "email"=> isset($user) ? $user['email'] : "",
            "favorite"=> isset($user) ? $user['favorite'] : "",
            "active" => "profile"
        ]);
    }
}



