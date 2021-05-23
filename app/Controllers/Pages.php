<?php
    namespace App\Controllers;
    class Pages extends BaseController
    {
        public function index()
        {
            $data = [
                'title' => 'Home | PayanganDev.'
            ];
            echo view('pages/home', $data);
        }

        public function about()
        {
            $data = [
                'title' => 'About Me'
            ];
            return  view('pages/about', $data);
        }

        public function contact()
        {
            $data = [
                'title' => 'Contact Us',
                'alamat' => [
                    [
                        'tipe' => 'Rumah',
                        'alamat' => 'Jl. As-syafiiyah 2 No.113',
                        'kota' => 'Bekasi'
                    ],
                    [
                        'tipe' => 'Kantor',
                        'alamat' => 'Jl. Sumur Binong 7',
                        'kota' => 'Bekasi'
                    ]
                ]
            ];
            return view('pages/contact', $data);

        }
    }