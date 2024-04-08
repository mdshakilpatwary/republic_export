<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;
class ProductController extends Controller
{
    public function index(){

        return view('backend.product.productAdd');
    }
    public function store(Request $request){
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'product_banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'image_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'image_3' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'image_4' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'image_5' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'product_name' => 'required|max:100|unique:products,p_name',
            'product_headline' => 'required|max:200',
            'product_description' => 'required|max:500',
        ]);

        $product=new Product;
        $product->p_name =$request->product_name;
        $product->p_headline =$request->product_headline ;
        $product->p_description =$request->product_description ;
        

        if($request->file('product_image')){
            $manager = new ImageManager(new Driver());
            $image = $request->file('product_image');
            $customName = 'product' . rand() . '.' . $image->getClientOriginalExtension();            
            $img = $manager->read($image)->resize(400,350);          
            $img->toPng()->save(public_path('uploads/product/'.$customName)); 
            $product->p_image= $customName;
 
        }
        // banner image part 
        if($request->file('product_banner')){
            $b_manager = new ImageManager(new Driver());
            $b_image = $request->file('product_banner');
            $b_customName = 'banner' . rand() . '.' . $b_image->getClientOriginalExtension();            
            
            $b_img = $b_manager->read($b_image)->resize(1200,600);          
            $b_img->toJpeg()->save(public_path('uploads/product/'.$b_customName)); 
            $product->p_banner= $b_customName;
 
        }
        // design content img start
        if($request->file('image_1')){
            
            $image = $request->file('image_1');
            $customName = 'image_1' . rand() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(500,600);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName)); 

            $product->image_1= $customName; 
        }
        if($request->file('image_2')){
            $image = $request->file('image_2');
            $customName = 'image_2' . rand() . '.' . $image->getClientOriginalExtension(); 
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(500,600);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));         
            $product->image_2= $customName;
        }
        if($request->file('image_3')){
            $image = $request->file('image_3');
            $customName = 'image_3' . rand() . '.' . $image->getClientOriginalExtension(); 
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(500,400);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));         
            $product->image_3= $customName;
        }
        if($request->file('image_4')){
            $image = $request->file('image_4');
            $customName = 'image_4' . rand() . '.' . $image->getClientOriginalExtension();  
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(800,500);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));        
            $product->image_4= $customName;
        }
        if($request->file('image_5')){
            if(File::exists(public_path('uploads/product/'.$product->image_5))){
                File::delete(public_path('uploads/product/'.$product->image_5));
            }
            $image = $request->file('image_5');
            $customName = 'image_5' . rand() . '.' . $image->getClientOriginalExtension(); 
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(300,500);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));         
            $product->image_5= $customName;
        }
        // design content img end

        $msg =$product->save();
        if($msg){
            return redirect('/product/manage')->with('success','Product successfully added.');
        }
        else{
            return back()->with('error','Oops! Product Not add.');
        }
    }

    // manage part 
    public function manage(){
        $products =Product::orderBy('id','desc')->get();
        return view('backend.product.productManage', compact('products'));
    }
    // edit part 
    public function edit($id){
        $product =Product::findOrFail($id);
        return view('backend.product.productEdit', compact('product'));
    }
    // update part 
    public function update(Request $request,$id){
        $product =Product::findOrFail($id);
        $request->validate([
            'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_name' => 'required|max:100',
            'product_headline' => 'required|max:200',
            'product_description' => 'required|max:500',
        ]);
        $product->p_name =$request->product_name;
        $product->p_headline =$request->product_headline ;
        $product->p_description =$request->product_description ;
        

        if($request->file('product_image')){
            $manager = new ImageManager(new Driver());
            if(File::exists(public_path('uploads/product/'.$product->p_image))){
                File::delete(public_path('uploads/product/'.$product->p_image));
            }
            $image = $request->file('product_image');
            $customName = 'product' . rand() . '.' . $image->getClientOriginalExtension();            
            $img = $manager->read($image)->resize(400,350);          
            $img->toPng()->save(public_path('uploads/product/'.$customName)); 
            $product->p_image= $customName;
 
        }
        // banner image part 
        if($request->file('product_banner')){
            if(File::exists(public_path('uploads/product/'.$product->p_banner))){
                File::delete(public_path('uploads/product/'.$product->p_banner));
            }
            $b_manager = new ImageManager(new Driver());
            $b_image = $request->file('product_banner');
            $b_customName = 'banner' . rand() . '.' . $b_image->getClientOriginalExtension(); 
            $b_img = $b_manager->read($b_image)->resize(1200,600);          
            $b_img->toJpeg()->save(public_path('uploads/product/'.$b_customName));             
            $product->p_banner= $b_customName;
 
        }
        // design content img start
        if($request->file('image_1')){
            if(File::exists(public_path('uploads/product/'.$product->image_1))){
                File::delete(public_path('uploads/product/'.$product->image_1));
            }
            $image = $request->file('image_1');
            $customName = 'image_1' . rand() . '.' . $image->getClientOriginalExtension();
            
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(500,600);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));
            $product->image_1= $customName;
    
        }
        if($request->file('image_2')){
            if(File::exists(public_path('uploads/product/'.$product->image_2))){
                File::delete(public_path('uploads/product/'.$product->image_2));
            }
            $image = $request->file('image_2');
            $customName = 'image_2' . rand() . '.' . $image->getClientOriginalExtension();   
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(500,600);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));         
            $product->image_2= $customName;
        }
        if($request->file('image_3')){
            if(File::exists(public_path('uploads/product/'.$product->image_3))){
                File::delete(public_path('uploads/product/'.$product->image_3));
            }
            $image = $request->file('image_3');
            $customName = 'image_3' . rand() . '.' . $image->getClientOriginalExtension();  
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(500,400);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));       
            $product->image_3= $customName;
        }
        if($request->file('image_4')){
            if(File::exists(public_path('uploads/product/'.$product->image_4))){
                File::delete(public_path('uploads/product/'.$product->image_4));
            }
            $image = $request->file('image_4');
            $customName = 'image_4' . rand() . '.' . $image->getClientOriginalExtension(); 
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(800,500);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));         
            $product->image_4= $customName;
        }
        if($request->file('image_5')){
            if(File::exists(public_path('uploads/product/'.$product->image_5))){
                File::delete(public_path('uploads/product/'.$product->image_5));
            }
            $image = $request->file('image_5');
            $customName = 'image_5' . rand() . '.' . $image->getClientOriginalExtension(); 
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image)->resize(300,500);          
            $img->toJpeg()->save(public_path('uploads/product/'.$customName));         
            $product->image_5= $customName;
        }
        // design content img end


        $msg =$product->update();
        if($msg){
            return redirect('/product/manage')->with('success','Product successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Product Not Update.');
        }

    }
    // delete part 
    public function delete($id){
        $product =Product::findOrFail($id);
        $msg =$product->delete();
        if($msg){
            if(File::exists(public_path('uploads/product/'.$product->p_image))){
                File::delete(public_path('uploads/product/'.$product->p_image));
            }
            if(File::exists(public_path('uploads/product/'.$product->p_banner))){
                File::delete(public_path('uploads/product/'.$product->p_banner));
            }
            if(File::exists(public_path('uploads/product/'.$product->image_1))){
                File::delete(public_path('uploads/product/'.$product->image_1));
            }
            if(File::exists(public_path('uploads/product/'.$product->image_2))){
                File::delete(public_path('uploads/product/'.$product->image_2));
            }
            if(File::exists(public_path('uploads/product/'.$product->image_3))){
                File::delete(public_path('uploads/product/'.$product->image_3));
            }
            if(File::exists(public_path('uploads/product/'.$product->image_4))){
                File::delete(public_path('uploads/product/'.$product->image_4));
            }
            if(File::exists(public_path('uploads/product/'.$product->image_5))){
                File::delete(public_path('uploads/product/'.$product->image_5));
            }
            return back()->with('success','Product successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Product Not Delete.');
        }

    }


}
