<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class UserController extends Controller
{
    function getData(){
        $data =  Blog::all();
        return view("home",['data'=>$data]);
    }
    function showData($id){
        $data =  Blog::find($id);
        return view("edit",['data'=>$data]);
    }
    
    function Update(Request $req){
        $data = Blog::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->save();
        return redirect("/");
    }
    function delete($id){
        $data = Blog::find($id);
        $data->delete();
        return redirect("/");
    }
    
}
