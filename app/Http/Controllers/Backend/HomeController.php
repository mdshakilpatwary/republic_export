<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Mail\ForgetPassMail;
use Illuminate\Support\Facades\Mail;
use File;
use Str;
class HomeController extends Controller
{

    // Login function method 
    public function login(){
        return view('backend.admin_login');

    }

    // Site info function mehtod 
    public function siteInfo(){
        $siteInfo = SiteInfo::where('type','active_siteInfo')->first();
        return view('backend.siteInfo', compact('siteInfo'));
    }

    // site info update 
    public function siteInfoUpdate(Request $request, $type){
        $siteInfo = SiteInfo::where('type',$type)->first();
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone_1' => 'required|numeric|digits:11',
            'address_1' => 'required',
            'name' => 'required',
        ]);
        $siteInfo->name =$request->name ;
        $siteInfo->email =$request->email ;
        $siteInfo->phone_1 =$request->phone_1 ;
        $siteInfo->phone_2 =$request->phone_2 ;
        $siteInfo->address_1 = $request->address_1 ;
        $siteInfo->address_2 = $request->address_2 ;

        if($request->file('logo')){
            if(File::exists(public_path('uploads/siteinfo/'.$siteInfo->logo))){
                File::delete(public_path('uploads/siteinfo/'.$siteInfo->logo));
            }
            $image = $request->file('logo');
            $customName = 'sitelogo' . rand() . '.' . $image->getClientOriginalExtension();            
            
            $siteInfo->logo= $customName;
            $image->move('uploads/siteinfo/',$customName);
 
        }
        $msg =$siteInfo->update();
        if($msg){
            return back()->with('success','Data successfully updated.');
        }
        else{
            return back()->with('success','Data Not update.');
        }
    }
    // Logout function method 
    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }


        // forgate function method 
        public function forgatePass(){
            return view('backend.forgatePass');
    
        }
        // forgate email part function method 
        public function forgatePassEmail(Request $request){
            if(User::where('email','=',$request->email)->first()){
                $user =User::where('email','=',$request->email)->first();
                $user->remember_token = Str::random(20);
                $user->update();
                Mail::to($user->email)->send(new ForgetPassMail($user));
                return redirect()->back()->with('success','Please check your email and reset your password');
    
            }
            else{
                return back()->with('error','Oops! Your email not match please try again');
            }
    
        }
        public function resetPass($token){
            $user =User::where('remember_token','=',$token)->first();
            if($user){
                return view('backend.resetPass',compact('user'));

            }
            else{
                abort(404, 'Sorry !This page is not available for you!');
            }


        }
        public function updatePass(Request $request, $token){
            $user = User::where('remember_token','=',$token)->first();
            $request->validate([
               'newPassword' => 'required',
               'confirm_password' => 'required|same:newPassword',
           ],
           [
               'newPassword.require' => 'Your new password is required',
               'confirm_password.require' => 'Your confirm password is required',
           ]);
           $user->password = Hash::make($request->newPassword);
           $user->remember_token = Str::random(20);
           $msg =$user->update();
           if($msg){
   
               return redirect('/admin')->with('success','Password successfully changed');
           }
           else{         
               return back()->with('error','please try again');
           }
        }

}
