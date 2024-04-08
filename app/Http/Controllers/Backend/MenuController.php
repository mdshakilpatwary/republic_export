<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuName;

class MenuController extends Controller
{
    public function create(){
        $menus = MenuName::all();
        return view('backend.menu.index', compact('menus'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|max:20',
        ]);
        $menu =MenuName::findOrFail($id);
        $menu->menuName =$request->name;
        $msg = $menu->update();
        if($msg){
            return back()->with('success','Menu Successfully Saved');
        }
        else{
            return back()->with('error','Oops! Menu Not Save');
        }
    }


    public function status($id){
        $menu =MenuName::findOrFail($id);
       if($menu->status == 1){
        $menu->status =0;
        $msg =$menu->update();
        if($msg){
            return back()->with('success','Page Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Page Not Inactive');
        }
       }
       else{
        $menu->status =1;
        $msg =$menu->update();
        if($msg){
            return back()->with('success','Page Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Page Not Activate');
        }

       }
    }
}
