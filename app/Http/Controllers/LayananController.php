<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;


class LayananController extends Controller
{
    public function index()
    {
        // $dt = Layanan::getDataLayanan();
        // $length = count($dt['contents'][1]['value']);

        // for ($i = 0; $i < $length; $i++) {
        //     if (isset($dt['contents'][1]['value'][$i]['body'])) {
        //         print_r($dt['contents'][1]['value'][$i]['body']);
        //     }
        // }
        // die('test');

        return view(
            'pages/layanan-kami',
            [
                'title'        => 'layanan',
                'dataJudul'    => Layanan::getDataTitle(),
                'dataTentang'  => Layanan::getDataTentang(),
                'dataLayanan'  => Layanan::getDataLayanan(),
                'dataRencana'  => Layanan::getDataRencana(),
                'dataTips'     => Layanan::getDataTips(),
                'dataPendampingan' => Layanan::getDataPendampingan()
            ]
        );
    }
}
