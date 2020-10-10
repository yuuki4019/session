<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionTestController extends Controller
{
    public function create(Request $request){
        
        return view('session.create');
    }

    public function store(Request $request){

        //セッション登録
        if ($request->session()->has('name')==false) {
            $request->session()->put('name', $request->name);    
        }

        if ($request->session()->has('tel')==false) {
            $request->session()->put('tel', $request->tel);
        }

        if ($request->session()->has('email')==false) {
            $request->session()->put('email', $request->email);
        }

        $username = $request->name;
        return view('session.result',compact('username'));
    }

    public function detail(Request $request){
        //セッション登録
        $username = $request->session()->get('name');
        $tel = $request->session()->get('tel');
        $email = $request->session()->get('email');
        
        return view('session.detail',compact('username','tel','email'));
    }

    public function logout(Request $request){

        //確認用
        //$username = $request->session()->get('name');
        //dump($username);

        //セッション削除
        $request->session()->flush();
        
        //確認用
        //$username = $request->session()->get('name');
        //dd($username);
        
        return redirect('/sessions');

    }
}
