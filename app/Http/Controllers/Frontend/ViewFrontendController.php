<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CommonHeaderBanner;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Career;
use App\Models\ProductSpecification;
use App\Models\ExpertisePageElement;
use Illuminate\Http\Request;

class ViewFrontendController extends Controller
{
    public function homepage(){
        $products = Product::orderBy('id','desc')->get();
        return view('frontend.index', compact('products'));
    }
    public function aboutpage(){
        return view('frontend.page.about');
    }
    public function productSinglePage($name){
        $product = Product::where('p_name','=', $name)->first();
        $images ='';
        $spacifics ='';
        if($product){
            $images = ProductImage::where('product_id','=',$product->id)->get();
            $spacifics = ProductSpecification::where('product_id','=',$product->id)->get();
        }

        return view('frontend.page.productSinglePage',compact('product','images','spacifics'));
    }
    // product page 
    public function productPage(){
        $products = Product::orderBy('id','desc')->get();

        return view('frontend.page.allProduct',compact('products'));
    }
    // career page 
    public function careerPage(){
        $careers = Career::where('status','=',1)->orderBy('id','desc')->get();

        return view('frontend.page.career',compact('careers'));
    }
    // expertise page 
    public function expertisePage(){
        $expertises = ExpertisePageElement::where('status','=',1)->get();

        return view('frontend.page.expertise',compact('expertises'));

    }
    // csr page 
    public function csrPage(){
        return view('frontend.page.csr');

    }
    // ccontactsr page 
    public function contactPage(){
        return view('frontend.page.contact');

    }

}
