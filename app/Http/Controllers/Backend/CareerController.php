<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\careerCommonInfo;

class CareerController extends Controller
{
    public function index(){
        return view('backend.career.careerAdd');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:200|unique:careers,title',
            'info_content' => 'required',
        ]);
        $career =new Career;
        $career->title = $request->title;
        $career->textContent = $request->info_content;
        $msg =$career->save();
        if($msg){
            return redirect('/career/manage')->with('success','Data Successfully Added');
        }
        else{
            return back()->with('error','Oops! Data Not Add.');
        }
    }

    public function manage(){
        $careers =Career::orderBy('id','desc')->get();
        return view('backend.career.careerManage',compact('careers'));
    }

    public function edit($id){
        $career =Career::findOrFail($id);
        return view('backend.career.careerEdit',compact('career'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required|max:200',
            'info_content' => 'required',
        ]);
        $career =Career::findOrFail($id);
        $career->title = $request->title;
        $career->textContent = $request->info_content;
        $msg =$career->update();
        if($msg){
            return redirect('/career/manage')->with('success','Data Successfully Updated');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
        
    }
    public function delete($id){
        $career =Career::findOrFail($id);
        $msg =$career->delete();
        if($msg){
            return back()->with('success','Data Successfully Deleted');
        }
        else{
            return back()->with('error','Oops! Data Not Delete.');
        }
    }
    public function status($id){
    $career =Career::findOrFail($id);
       if($career->status == 1){
        $career->status =0;
        $msg =$career->update();
        if($msg){
            return back()->with('success','Status Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Status Not Inactive');
        }
       }
       else{
        $career->status =1;
        $msg =$career->update();
        if($msg){
            return back()->with('success','Status Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Status Not Activate');
        }

       }
    }
// career common part 
    public function careerCommon(){
        $careerCommon= careerCommonInfo::where('type','=',1)->first();
        return view('backend.career.careerCommon',compact('careerCommon'));
    }

    public function updateCommon(Request $request,$id){

        $request->validate([
            'title' => 'required|max:250',
            'career_footer' => 'required',
            'career_text' => 'required',
        ]);
        $careerCommon =careerCommonInfo::where('type',$id)->first();
        $careerCommon->title = $request->title;
        $careerCommon->career_text = $request->career_text;
        $careerCommon->career_footer = $request->career_footer;
        $msg =$careerCommon->update();
        if($msg){
            return back()->with('success','Data Successfully Saved');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
    }
}
