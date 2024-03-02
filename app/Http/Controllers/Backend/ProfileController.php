<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class ProfileController extends Controller
{
    public function index(){
        return view('backend.profile');
    }
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
