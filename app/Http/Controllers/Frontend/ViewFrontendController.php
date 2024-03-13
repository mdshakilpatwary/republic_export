<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CommonHeaderBanner;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSpecification;
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
        $product = Product::orderBy('id','desc')->get();
        $images = ProductImage::orderBy('id','desc')->get();
        $spacifics = ProductSpecification::orderBy('id','desc')->get();


        return view('frontend.page.allProduct',compact('product','images','spacifics'));
    }

}
