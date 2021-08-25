<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return [
            'NIS' => 3103119136,
            'Nama' => 'Namira Shifwah Kumandani',
            'Jenis Kelamin' => 'Perempuan',
            'Telepon' => '082138772462',
            'Kelas' => 'XII RPL 4'
        ];
    }
}
