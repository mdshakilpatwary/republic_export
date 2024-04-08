<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageElement;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class PageElementController extends Controller
{
    // home indutrial element
    public function index(){
        return view('backend.homeElement.industrialElement');
    }
    public function store(Request $request){
        // $request->validate([
        //     'elementImage' => 'image|mimes:jpeg,png,jpg,gif|max:1048',
        // ]);
        $pageElement=new PageElement;
      
        if(PageElement::where('type','=', 1)->first()){

            return back()->with('error','Oops! Already you have passed this element data !');
        }
        else{

            if($request->file('elementImage')){
                $images=array();
                $files = $request->file('elementImage');
                
                    foreach($files as $file){
                        $customnamefile='industrialElement'.rand().'.'. $file->getClientOriginalExtension();
                        $images[]= $customnamefile;
                        $manager = new ImageManager(new Driver());
                        $img = $manager->read($file)->resize(200,150);          
                        $img->toPng()->save(public_path('uploads/element/'.$customnamefile));
                                      
                       
            
                    }
                
            }

            $contentArray = [
                'contentTitle' => $request->elementTitle,
                'contentText' => $request->elementText,
                'contentImage' => $images
            ];
    
            $contentJson = json_encode($contentArray);
            $pageElement->type =1;
            $pageElement->content =$contentJson;
            $msg = $pageElement->save();

            if($msg){
                return back()->with('success','Successfully element added.');
            }
            else{
                return back()->with('error','Oops! Element Not add.');
            }
        }


    }

    public function update(Request $request,$id){


        $elements = PageElement::where('type',1)->first();
        $contentArray =json_decode($elements->content, true);  
        

        
        $images=array();
        if($request->elementImage){
            
        }
        if($request->elementImage or $request->file['elementImage']){
            $inputValues = array_filter($request->elementImage, function($value) {
                return !is_a($value, \Illuminate\Http\UploadedFile::class);
            });
            foreach($inputValues as $inputValue){

                $images[]= $inputValue;
            }
            
             if($request->file('elementImage')){
                $files = $request->file('elementImage');
                foreach($files as $file){
                    $manager = new ImageManager(new Driver());
                    $customnamefile='industrialElement'.rand().'.'. $file->getClientOriginalExtension();
                    $img = $manager->read($file)->resize(200,150);          
                    $img->toPng()->save(public_path('uploads/element/'.$customnamefile));
                  
                    $images[]= $customnamefile;
                                       
        
                }
             }
            
        }
        $contentArray = [
            'contentTitle' => $request->elementTitle,
            'contentText' => $request->elementText,
            'contentImage' => $images
        ];
        $contentJson = json_encode($contentArray);
        $elements->content = $contentJson;
        $msg = $elements->update();

        if($msg){
            return back()->with('success','Successfully element Updated.');
        }
        else{
            return back()->with('error','Oops! Element Not Update.');
        }
    }

// home client element part
    public function client(){
        return view('backend.homeElement.clientElement');
    }
    // store 
    public function clientStore(Request $request){

        $pageElement=new PageElement;
      
        if(PageElement::where('type','=', 2)->first()){

            return back()->with('error','Oops! Already you have passed this element data !');
        }
        else{

            if($request->file('elementImage')){
                $images=array();
                $files = $request->file('elementImage');
                
                    foreach($files as $file){
                        $manager = new ImageManager(new Driver());
                        $customnamefile='industrialElement'.rand().'.'. $file->getClientOriginalExtension();
                        $img = $manager->read($file)->resize(200,80);          
                        $img->toPng()->save(public_path('uploads/element/'.$customnamefile));
                        $images[]= $customnamefile;
                                       
                       
            
                    }
                
            }

            $contentArray = [
                'contentTitle' => $request->elementTitle,
                'contentText' => $request->elementText,
                'contentImage' => $images
            ];
            
            $contentJson = json_encode($contentArray);
            $pageElement->type =2;
            $pageElement->content =$contentJson;
            $msg = $pageElement->save();

            if($msg){
                return back()->with('success','Successfully element added.');
            }
            else{
                return back()->with('error','Oops! Element Not add.');
            }
        }
    }

    // update 
    public function clientUpdate(Request $request,$id){

        $elements = PageElement::where('type',2)->first();        

        
        $images=array();
        if($request->elementImage){
            
        }
        if($request->elementImage or $request->file['elementImage']){
            $inputValues = array_filter($request->elementImage, function($value) {
                return !is_a($value, \Illuminate\Http\UploadedFile::class);
            });
            foreach($inputValues as $inputValue){

                $images[]= $inputValue;
            }
            
             if($request->file('elementImage')){
                $files = $request->file('elementImage');
                foreach($files as $file){
                    $manager = new ImageManager(new Driver());
                    $customnamefile='industrialElement'.rand().'.'. $file->getClientOriginalExtension();
                    $img = $manager->read($file)->resize(200,80);          
                    $img->toPng()->save(public_path('uploads/element/'.$customnamefile));
                  
                    $images[]= $customnamefile;
                   
                    
        
                }
             }
            
        }
        $contentArray = [
            'contentTitle' => $request->elementTitle,
            'contentText' => $request->elementText,
            'contentImage' => $images
        ];
        $contentJson = json_encode($contentArray);
        $elements->content = $contentJson;
        $msg = $elements->update();

        if($msg){
            return back()->with('success','Successfully Client Element Updated.');
        }
        else{
            return back()->with('error','Oops! Client Element Not Update.');
        }

    }

}
