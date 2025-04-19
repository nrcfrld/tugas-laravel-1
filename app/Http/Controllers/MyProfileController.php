<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function index($name, $umur)
    {

        $bio = 'Ini adalah biografi tentang kehidupan personal saya selama belajar di greenacademy';

        return view('my-profile', [
            'nama' => $name,
            'umur' => $umur,
            'hobi' => 'Olahraga',
            'biografi' => $bio
        ]);
    }
}
