<?php

namespace App\Helpers\App;

use App\Helpers\App\ApiRequest;

class ApiServiceFrontend
{
    public static function MainMenu()
    {
        $credential = 'Basic '.base64_encode(config('constants.api.key.username').':'.config('constants.api.key.password'));
        $request = 'frontend/index/mainmenu';
        $header = [ 'Authorization' => $credential ];
        $body = [];
        $response = ApiRequest::requestPost($request, $header, $body);
        return $response;
    }
}
