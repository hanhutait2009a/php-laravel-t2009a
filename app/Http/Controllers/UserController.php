<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Register(){
        return view('register');
    }
    public function XlRegister(Request $request){
        $fullname = $request->get('Fullname');
        $email= $request->get('Email');
        $phone = $request->get('Phone');
        $address = $request->get('Address');
        $identityCard = $request->get('Identity-Card');
        return view('detail')-> with('name',$fullname) -> with('email',$email) ->with('phone',$phone) ->with('address',$address) ->with('identityCard',$identityCard);
    }
    public function getUserDetail($id){
        return 'Hello Id:'.$id;
    }
}
