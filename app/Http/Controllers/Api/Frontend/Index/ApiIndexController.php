<?php

namespace App\Http\Controllers\Api\Frontend\Index;

use App\Helpers\Api\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


class ApiIndexController extends Controller
{
    public function main(Request $request) {
        try {
            $sql = "select	'banner' as main,
                            isnull(banner.kode, '') as keterangan,
                            isnull(banner.images, '') as images
                    from	banner with (nolock)
                    where	isnull(banner.show, 0) = 1
                    union all
                    select	'produk' as main,
                            isnull(produk.nama, '') as keterangan,
                            isnull(produk.images, '') as images
                    from	produk with (nolock)
                    where	isnull(produk.show, 0) = 1";

            $result = DB::select($sql);

            $data_banner = [];
            $data_produk = [];

            foreach($result as $data) {
                if(strtoupper(trim($data->main)) == 'BANNER') {
                    $data_banner[] = [
                        'images'    => trim($data->images)
                    ];
                }
                if(strtoupper(trim($data->main)) == 'PRODUK') {
                    $data_produk[] = [
                        'description'   => trim($data->keterangan),
                        'images'        => trim($data->images)
                    ];
                }
            }

            $data_main_menu = [
                'banner'    => $data_banner,
                'produk'    => $data_produk
            ];

            return ApiResponse::responseSuccess('success', $data_main_menu);
        } catch (\Exception $exception) {
            return ApiResponse::responseError($request->get('user_id'), 'API', Route::getCurrentRoute()->action['controller'],
                        $request->route()->getActionMethod(), $exception->getMessage(), $request->get('companyid'));
        }


    }
}
