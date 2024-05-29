<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Contracts\View\View;

class FrontendController extends Controller
{
    public function index(): View
    {
        $sliders = Slider::where('status', 1)->get();

        return view('frontend.home.index', compact('sliders'));
    }
}
