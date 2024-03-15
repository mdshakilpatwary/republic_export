<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExpertisePageElement;
use File;

class ExpertisePageController extends Controller
{
    public function index(){
        return view('backend.expertise.expertiseElementAdd');
    }
    // store 
    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'title' => 'required|max:200',
            'text_content' => 'max:1200',
            'type' => 'required',
        ]);

        $expertise=new ExpertisePageElement;
        $expertise->title =$request->title ;
        $expertise->text_content =$request->text_content ;
        $expertise->type = $request->type ;

        if($request->file('image')){
           
            $image = $request->file('image');
            $customName = 'expertise' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $expertise->image= $customName;
            $image->move('uploads/expertise/',$customName);
 
        }
        $msg =$expertise->save();
        if($msg){
            return redirect('/expertise/element/manage')->with('success','Data successfully added.');
        }
        else{
            return back()->with('error','Oops! Data Not add.');
        }   
    }

    // edit 

    public function edit($id){
        $expertise= ExpertisePageElement::findOrFail($id);
        return view('backend.expertise.expertiseElementEdit', compact('expertise'));
    }

    // update 

    public function update(Request $request,$id){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'title' => 'required|max:200',
            'text_content' => 'max:1200',
            'type' => 'required',
        ]);

        $expertise= ExpertisePageElement::findOrFail($id);
        $expertise->title =$request->title ;
        $expertise->text_content =$request->text_content ;
        $expertise->type = $request->type ;

        if($request->file('image')){
            if(File::exists(public_path('uploads/expertise/'.$expertise->image))){
                File::delete(public_path('uploads/expertise/'.$expertise->image));
            }
            $image = $request->file('image');
            $customName = 'expertise' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $expertise->image= $customName;
            $image->move('uploads/expertise/',$customName);
 
        }
        $msg =$expertise->update();
        if($msg){
            return redirect('/expertise/element/manage')->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }

    }
    // manage 
    public function manage(){
        $expertises =ExpertisePageElement::orderBy('id','desc')->get();
        return view('backend.expertise.expertiseElementManage', compact('expertises'));
    }
    // delete 
    public function delete($id){
        $expertise= ExpertisePageElement::findOrFail($id);
        $msg= $expertise->delete();
        if($msg){
            if(File::exists(public_path('uploads/expertise/'.$expertise->image))){
                File::delete(public_path('uploads/expertise/'.$expertise->image));
            }
            return back()->with('success','Data successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Data Not Delete.');
        }
    }
    // status 

    public function status($id){
        $expertise= ExpertisePageElement::findOrFail($id);
       if($expertise->status == 1){
        $expertise->status =0;
        $msg =$expertise->update();
        if($msg){
            return back()->with('success','Status Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Status Not Inactive');
        }
       }
       else{
        $expertise->status =1;
        $msg =$expertise->update();
        if($msg){
            return back()->with('success','Status Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Status Not Activate');
        }

       }
    }



}
