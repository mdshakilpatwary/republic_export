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
            'title.*' => 'max:150',
            'text_content.*' => 'max:1200',
        ]);
        $title =[
            $request->title,
        ];
        $content =[
            $request->text_content,
        ];
        $titleJson = json_encode($title);
        $contentJson = json_encode($content);
        $csr_raw=new CsrPageElement;
        $csr_raw->title =$titleJson ;
        $csr_raw->text_content =$contentJson ;
        $csr_raw->type = 2;
        
        $msg =$csr_raw->save();
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
            'title.*' => 'max:150',
            'text_content.*' => 'max:1200',
        ]);
        $title =[
            $request->title,
        ];
        $content =[
            $request->text_content,
        ];
        $titleJson = json_encode($title);
        $contentJson = json_encode($content);

        $csr_raw=CsrPageElement::findOrFail($id);
        $csr_raw->title =$titleJson ;
        $csr_raw->text_content =$contentJson ;        
        $msg =$csr_raw->update();
        if($msg){
            return back()->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
    }
    //csr pre-production meterial part start 

    public function csrPreProduction(){
        return view('backend.csr.csrPreProductionElementAdd');
    }

    // csr Pre product part add 
    public function csrPreProductionStore(Request $request){

        $request->validate([
            'title.*' => 'max:150',
            'text_content.*' => 'max:1200',
        ]);
        $title =[
            $request->title,
        ];
        $content =[
            $request->text_content,
        ];
        $titleJson = json_encode($title);
        $contentJson = json_encode($content);

        $csrPreProduction=new CsrPageElement;
        $csrPreProduction->title =$titleJson ;
        $csrPreProduction->text_content =$contentJson ;
        $csrPreProduction->type = 3;
        
        $msg =$csrPreProduction->save();
        if($msg){
            return back()->with('success','Data successfully added.');
        }
        else{
            return back()->with('error','Oops! Data Not add.');
        }


    }
    // pre production update part 
    public function csrPreProductionUpdate(Request $request, $id){
        
        $request->validate([
            'title.*' => 'max:150',
            'text_content.*' => 'max:1200',
        ]);
        $title =[
            $request->title,
        ];
        $content =[
            $request->text_content,
        ];
        $titleJson = json_encode($title);
        $contentJson = json_encode($content);

        $csrPreProduction=CsrPageElement::findOrFail($id);
        $csrPreProduction->title =$titleJson ;
        $csrPreProduction->text_content =$contentJson ;        
        $msg =$csrPreProduction->update();
        if($msg){
            return back()->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
    }

    //csr production meterial part start 

    public function csrProduction(){
        return view('backend.csr.csrProductionElementAdd');
    }

    // csr product part add 
    public function csrProductionStore(Request $request){

        $request->validate([
            'title.*' => 'max:150',
            'text_content.*' => 'max:1200',
        ]);
        $title =[
            $request->title,
        ];
        $content =[
            $request->text_content,
        ];
        $titleJson = json_encode($title);
        $contentJson = json_encode($content);

        $csrProduction=new CsrPageElement;
        $csrProduction->title =$titleJson ;
        $csrProduction->text_content =$contentJson ;
        $csrProduction->type = 4;
        
        $msg =$csrProduction->save();
        if($msg){
            return back()->with('success','Data successfully added.');
        }
        else{
            return back()->with('error','Oops! Data Not add.');
        }


    }
    // pre production update part 
    public function csrProductionUpdate(Request $request, $id){
        
        $request->validate([
            'title.*' => 'max:150',
            'text_content.*' => 'max:1200',
        ]);
        $title =[
            $request->title,
        ];
        $content =[
            $request->text_content,
        ];
        $titleJson = json_encode($title);
        $contentJson = json_encode($content);

        $csrProduction=CsrPageElement::findOrFail($id);
        $csrProduction->title =$titleJson ;
        $csrProduction->text_content =$contentJson ;        
        $msg =$csrProduction->update();
        if($msg){
            return back()->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
    }





}
