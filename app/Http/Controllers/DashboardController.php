<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class DashboardController extends Controller
{
    // Menampilkan halaman home
    public function index()
    {
        $dataSlider = 'https://cdn.shopify.com/s/files/1/0326/4092/5836/files/Artboard5.jpg' ;
        $data = [
            'dSlider' => $dataSlider
        ];
        return view('layout.dashboard', $data);
    }
}
