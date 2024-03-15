<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CsrPageElement;
use File;

class CsrPageController extends Controller
{
    public function csrCommon(){
        return view('backend.csr.csrCommonElementAdd');
    }

    // common part add 
    public function csrCommonStore(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'title' => 'required|max:200',
            'text_content' => 'required|max:1200',
        ]);

        $common=new CsrPageElement;
        $common->title =$request->title ;
        $common->text_content =$request->text_content ;
        $common->type = 1;
        if($request->file('image')){
           
            $image = $request->file('image');
            $customName = 'csrCommon' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $common->image= $customName;
            $image->move('uploads/csr/',$customName);
 
        }
        $msg =$common->save();
        if($msg){
            return back()->with('success','Data successfully added.');
        }
        else{
            return back()->with('error','Oops! Data Not add.');
        }


    }
    // common element update part 
    public function csrCommonUpdate(Request $request, $id){
        
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'title' => 'required|max:200',
            'text_content' => 'required|max:1200',
        ]);

        $common=CsrPageElement::findOrFail($id);
        $common->title =$request->title ;
        $common->text_content =$request->text_content ;
        if($request->file('image')){
            if(File::exists(public_path('uploads/csr/'.$common->image))){
                File::delete(public_path('uploads/csr/'.$common->image));
            }
            $image = $request->file('image');
            $customName = 'csrCommon' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $common->image= $customName;
            $image->move('uploads/csr/',$customName);
 
        }
        $msg =$common->update();
        if($msg){
            return back()->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
    }




    //csr raw meterial part start 
    public function csrRaw(){
        return view('backend.csr.csrRawElementAdd');
    }

    // csr raw part add 
    public function csrRawStore(Request $request){

        $request->validate([
            'title' => 'required|max:200',
            'text_content' => 'required|max:1200',
        ]);

        $common=new CsrPageElement;
        $common->title =$request->title ;
        $common->text_content =$request->text_content ;
        $common->type = 1;
        if($request->file('image')){
           
            $image = $request->file('image');
            $customName = 'csrCommon' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $common->image= $customName;
            $image->move('uploads/csr/',$customName);
 
        }
        $msg =$common->save();
        if($msg){
            return back()->with('success','Data successfully added.');
        }
        else{
            return back()->with('error','Oops! Data Not add.');
        }


    }
    // raw element update part 
    public function csrRawUpdate(Request $request, $id){
        
        $request->validate([
            'title' => 'required|max:200',
            'text_content' => 'required|max:1200',
        ]);

        $common=CsrPageElement::findOrFail($id);
        $common->title =$request->title ;
        $common->text_content =$request->text_content ;
        if($request->file('image')){
            if(File::exists(public_path('uploads/csr/'.$common->image))){
                File::delete(public_path('uploads/csr/'.$common->image));
            }
            $image = $request->file('image');
            $customName = 'csrCommon' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $common->image= $customName;
            $image->move('uploads/csr/',$customName);
 
        }
        $msg =$common->update();
        if($msg){
            return back()->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
    }





}
