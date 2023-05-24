<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class HomeController extends Controller
{
    // Menampilkan halaman home
    public function index()
    {
        $dataBaner = 'https://cdn.shopify.com/s/files/1/0326/4092/5836/files/Artboard5.jpg' ;
        $dataHijab = [
            ['Pashmina Inner 2in1 - Sage','https://cdn.shopify.com/s/files/1/0326/4092/5836/products/Artboard7_360x.png','99.000'],
            ['Pashmina Inner 2in1 - Iron Grey','https://cdn.shopify.com/s/files/1/0326/4092/5836/products/Artboard6_360x.png','99.000'],
            ['Pashmina Inner 2in1 - Choca','https://cdn.shopify.com/s/files/1/0326/4092/5836/products/26_360x.png?v=1657610207','99.000'],
            ['Pashmina Inner 2in1 - Burgundy','https://cdn.shopify.com/s/files/1/0326/4092/5836/products/11_95503a67-6784-47bf-adf6-7e251281fcc8_360x.png?v=1678094651','99.000'],
        ];

        $data = [
            'dHijab' => $dataHijab,
            'dBaner' => $dataBaner
        ];
        return view('layout.home', $data);
    }
}
