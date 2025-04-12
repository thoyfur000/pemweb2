<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function contact()
    {
        $data = [
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Desa Peterongan no 28',
                    'kota' => 'Jombang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Kompleks Ponpes Darul Ulum Peterongan',
                    'kota' => 'Jombang'
                ]
            ]
        ];

        return view('contact_view', $data);
    }
}
