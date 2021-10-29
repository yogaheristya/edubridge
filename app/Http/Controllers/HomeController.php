<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        // $test = Home::getDataTestimonial();
        // print_r($test);
        // die('test');
        return view(
            'pages/beranda',
            [
                'title' => 'home',
                'dataBanners' => Home::getDataBanners(),
                'dataTestimonial' => Home::getDataTestimonial()
            ]
        );
    }
}
