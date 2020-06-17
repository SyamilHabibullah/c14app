<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Web Jurusan Sistem Informasi',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('Pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('Pages/about', $data);
    }
    public function portfolio()
    {
        $data = [
            'title' => 'Portfolio'
        ];

        return view('Pages/portfolio', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Komplek XX Blok G.17',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jurusan Sistem Informasi',
                    'kota' => 'Bandung'
                ]
            ]
        ];

        return view('Pages/contact', $data);
    }
    //--------------------------------------------------------------------

}
