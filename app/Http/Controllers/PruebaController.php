<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\upport\Facades\Hash;
class PruebaController extends Controller
{


    Public function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));
       if($user ==='andrea'){
           $url= 'admon.dashboard';
       }else{
           $url='admon.login';

       }
       return view($url,[
           'user'=>$request->input('user'),
           'key'=>$key]);
       
    }}
    