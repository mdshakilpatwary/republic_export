<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSpecification;
use File;

class ProductElementController extends Controller
{
    public function productImage(){
        $products = Product::all();
        return view('backend.product.productImage.productImage',compact('products'));
    }
    public function productImageStore(Request $request){
        $request->validate([
            'product_image' => 'required|max:2048',
            'product_name' => 'required',
        ]);

        if($request->file('product_image')){
            $images = $request->file('product_image');
            foreach($images as $image){
                $customName = 'productImage' . rand() . '.' . $image->getClientOriginalExtension();  
                $product_image=new ProductImage;          
                $product_image->image= $customName;
                $product_image->product_id= $request->product_name;
                $product_image->save();
                $image->move('uploads/product/',$customName);
            }
            
 
        }
        $msg =$product_image->save();
        if($msg){
            return redirect('/product/image/manage/element/')->with('success','Product Image successfully added.');
        }
        else{
            return back()->with('error','Oops! Product Image Not add.');
        }
    }


    public function productImageManage(){
        $product_image =ProductImage::orderBy('id','desc')->get();
        return view('backend.product.productImage.productImageManage',compact('product_image'));
    }

    public function productImageDelete($id){

        $product_img =ProductImage::findOrFail($id);
        $msg =$product_img->delete();
        if($msg){
            if(File::exists(public_path('uploads/product/'.$product_img->image))){
                File::delete(public_path('uploads/product/'.$product_img->image));
            }
            return back()->with('success','Product Image successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Product Image Not Delete.');
        }
    }

// product spacification part start 

    public function productSpacific(){
        $products = Product::all();
        return view('backend.product.productSpacification.spacificationAdd',compact('products'));
    }
    // spacifications store part 
    public function productSpacificStore(Request $request){
        $request->validate([
            'product_name' => 'required',
            'text_content' => 'required|max:500',
            'title' => 'required|max:150',
        ]);
        $spacification=new ProductSpecification;
        $spacification->product_id=$request->product_name;
        $spacification->textContent=$request->text_content;
        $spacification->title=$request->title;

        $msg =$spacification->save();
        if($msg){
            return redirect('/product/spacific/manage/element/')->with('success','Data successfully added.');
        }
        else{
            return back()->with('error','Oops! Data Not add.');
        }
    }



    public function productSpacificManage(){
        $specifics = ProductSpecification::orderBy('id','desc')->get();
        return view('backend.product.productSpacification.spacificationManage',compact('specifics'));
    }
    public function productSpacificEdit($id){
        $specific = ProductSpecification::findOrFail($id);
        return view('backend.product.productSpacification.spacificationEdit',compact('specific'));
    }

    // update part 
    public function productSpacificUpdate(Request $request, $id){
        $spacification = ProductSpecification::findOrFail($id);

        $request->validate([
            'text_content' => 'required|max:500',
            'title' => 'required|max:150',
        ]);
        $spacification->textContent=$request->text_content;
        $spacification->title=$request->title;

        $msg =$spacification->update();
        if($msg){
            return redirect('/product/spacific/manage/element/')->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }


    }



    public function productSpacificDelete($id){
        $specific = ProductSpecification::findOrFail($id);

        $msg =$specific->delete();
        if($msg){
            return back()->with('success','Product Image successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Product Image Not Delete.');
        }
    }



}
