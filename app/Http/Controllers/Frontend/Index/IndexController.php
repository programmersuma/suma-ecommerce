<?php

namespace App\Http\Controllers\Frontend\Index;

use App\Helpers\ApiService;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        return view('frontend.index.main');
    }
}
