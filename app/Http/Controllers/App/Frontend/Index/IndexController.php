<?php

namespace App\Http\Controllers\App\Frontend\Index;

use App\Helpers\ApiServiceFrontend;
use App\Helpers\App\ApiServiceFrontend as AppApiServiceFrontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main() {
        $responseApi = AppApiServiceFrontend::MainMenu();
        $statusApi = json_decode($responseApi)->status;
        $messageApi =  json_decode($responseApi)->message;

        if($statusApi == 1) {
            $dataApi = json_decode($responseApi)->data;

            return view('frontend.index.main', [
                'banner'    => $dataApi->banner,
                'produk'    => $dataApi->produk,
            ]);
        } else {
            return redirect()->back()->withInput()->with('failed', $messageApi);
        }
    }
}
