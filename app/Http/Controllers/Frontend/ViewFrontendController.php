<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CommonHeaderBanner;
use Illuminate\Http\Request;

class ViewFrontendController extends Controller
{
    public function homepage(){
            
        return view('frontend.index');
    }
    public function aboutpage(){
        
    
        return view('frontend.page.about');
    }
}
