<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    //Insert Data
    public function save(Request $req)
    {
        DB::table('register')->insert([
            'image' => $req->input('image'),
            'fname' => $req->input('fname'),
            'lname' => $req->input('lname'),
            'birthday' => $req->input('birthday'),
            'gender' => $req->input('gender'),
            'email' => $req->input('email'),
            'phone' => $req->input('phone'),
            'subject' => $req->input('subject')


        ]);
        return redirect('/display');
    }
    //Get Data
    public function getData()
    {
        $data = DB::table('register')->get();
       // return $data;
        return view('Display',['data'=> $data]);
    }

    //Delete Data
    public function deleteData($id)
    {
        DB::table('register')->where('rid',$id)->delete();
        return redirect('/display');
    }

    //Edit Data
    public function editData($id)
    {
        $rec = DB::table('register')->where('rid',$id)->first();
        return view('Edit',compact('rec'));
    }
    public function update(Request $req)
    {
        $data = DB::table('register')
            ->where('rid',$req->hrid)
            ->update([
            'image' => $req->input('image'),
            'fname' => $req->input('fname'),
            'lname' => $req->input('lname'),
            'birthday' => $req->input('birthday'),
            'gender' => $req->input('gender'),
            'email' => $req->input('email'),
            'phone' => $req->input('phone'),
            'subject' => $req->input('subject')
            ]);  
            return redirect('/display');
    }
}
