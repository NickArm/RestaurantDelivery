<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class FrontendController extends Controller
{
    public function index(): View
    {
        return view('frontend.home.index');
    }
}
