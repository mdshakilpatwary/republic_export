<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageElement;
use File;

class AboutElementController extends Controller
{
        // About story element
        public function index(){
            return view('backend.aboutElement.aboutstory');
        }
        public function store(Request $request){
            $request->validate([
                'singleImage' => 'image|mimes:jpeg,png,jpg,gif|max:1048',
                'storyContent' => 'required',
            ]);
            $pageElement=new PageElement;
          
            if(PageElement::where('type','=', 3)->first()){
    
                return back()->with('error','Oops! Already you have passed about element data !');
            }
            else{
    
                if($request->file('elementImage')){
                    $images=array();
                    $files = $request->file('elementImage');
                    
                        foreach($files as $file){
                            $customnamefile='aboutStoryMulti'.rand().'.'. $file->getClientOriginalExtension();
                            $images[]= $customnamefile;
                           
                            $file->move('uploads/about/', $customnamefile);
                    
                           
                
                        }
                    
                }
                if($request->file('singleImage')){
                    $singlefiles = $request->file('singleImage');
                    
                            $customnamefile='aboutStorysingle'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                            $singlefiles->move('uploads/about/', $customnamefile);
                            
                            $pageElement->image =$customnamefile;
                    
                }
    
                $contentArray = [
                    'storyText' => $request->storyContent,
                    'contentImage' => $images
                ];
                $contentJson = json_encode($contentArray);
                $pageElement->type =3;
                $pageElement->content =$contentJson;
                $msg = $pageElement->save();
    
                if($msg){
                    return back()->with('success','Successfully about story added.');
                }
                else{
                    return back()->with('error','Oops! About Element Not Add.');
                }
            }
    
    
        }
    
        public function update(Request $request,$id){
    
    
            $elements = PageElement::where('type',3)->first();  
            
            
            $images=array();
            
            if($request->elementImage or $request->file['elementImage']){
                $inputValues = array_filter($request->elementImage, function($value) {
                    return !is_a($value, \Illuminate\Http\UploadedFile::class);
                });

                foreach($inputValues as $inputValue){
    
                    $images[]= $inputValue;
                }
                // multiple image 
                if($request->file('elementImage')){
                    $files = $request->file('elementImage');
                    
                        foreach($files as $file){
                            $customnamefile='aboutStoryMulti'.rand().'.'. $file->getClientOriginalExtension();
                            $images[]= $customnamefile;
                           
                            $file->move('uploads/about/', $customnamefile);
                
                        }
                    
                }
                // single image 
                if($request->file('singleImage')){
                    if(File::exists(public_path('uploads/about/'.$elements->image))){
                        File::delete(public_path('uploads/about/'.$elements->image));
                    }
                    $singlefiles = $request->file('singleImage');
                    
                    $customnamefile='aboutStorysingle'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                    $singlefiles->move('uploads/about/', $customnamefile);
                    
                    $elements->image =$customnamefile;
                    
                }
                
            }
            $contentArray = [
                'storyText' => $request->storyContent,
                'contentImage' => $images
            ];
            $contentJson = json_encode($contentArray);
            $elements->content = $contentJson;
            $msg = $elements->update();
    
            if($msg){
                return back()->with('success','Successfully about element Updated.');
            }
            else{
                return back()->with('error','Oops! About Element Not Update.');
            }
        }

}
