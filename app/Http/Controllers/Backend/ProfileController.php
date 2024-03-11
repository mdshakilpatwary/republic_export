<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use File;
use Image;


class ProfileController extends Controller
{
    public function index(){
        return view('backend.profile');
    }

    // profile update method
    public function update(Request $request, $id){
        $user = User::find($id);
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user->name =$request->name ;
        $user->email =$request->email ;
        $user->phone =$request->phone ;

        if($request->file('image')){
            if(File::exists(public_path('uploads/user/'.$user->image))){
                File::delete(public_path('uploads/user/'.$user->image));
            }
            $image = $request->file('image');
            $customName = 'user' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $user->image= $customName;
            $image->move('uploads/user/',$customName);
 
        }
        $msg =$user->update();
        if($msg){
            return back()->with('success','Data successfully updated.');
        }
        else{
            return back()->with('success','Data Not update.');
        }
    }

    // password change method 
    public function changePassword(Request $rqst, $id){
        $userpass = User::find($id);
        $rqst->validate([
            'oldPass' => 'required',
            'newPass' => 'required',
            'conPass' => 'required|same:newPass',
        ],
        [
            'oldPass.required' => 'Your old password is required',
            'newPass.required' => 'Your new password is required',
            'conPass.required' => 'Your confirm password is required',
        ]);

        $oldPass = $rqst->oldPass;
        $userOldpass = $userpass->password;
        if(Hash::check($oldPass, $userOldpass)){
            $userpass->password = bcrypt($rqst->newPass);
            $userpass->update();
           
            return back()->with('success','Password successfully changed');

        }
        else{
          
            return back()->with('error','old password not match');


        }
    }
}
