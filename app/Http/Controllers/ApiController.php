<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models\User;

class ApiController extends Controller
{

function getPosts(Request $request){

    $n =5;
    $f=1;
    for($i=$n;$i>0;$i--){
        $f = $f*$i;
    }


    return response()->json(['message'=>"success",'statusCode'=>200,'result'=> $f]);
}


function createUser(Request $request){

    $user =User::create([
        'name'=> $request->name;
        'email'=> $request->email;
        'email_verified_at'=> NOW();
    ]);

    return response()->json(['message'=>"success",'statusCode'=>201]);


}


}
