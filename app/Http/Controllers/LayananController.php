<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;


class LayananController extends Controller
{
    public function index()
    {
        return view(
            'pages/layanan-kami',
            [
                'title' => 'layanan',
                'dataTentang' => Layanan::getDataTentang(),
                'dataLayanan' => Layanan::getDataLayanan()
            ]
        );
    }
}
