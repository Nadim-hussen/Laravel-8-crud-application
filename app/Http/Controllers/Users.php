<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Blog;
class Users extends Controller
{
    function index(Request $req)
    {
        $member = new Blog();
        $member->name = $req->name;
        $member->email = $req->email;
        $member->phone = $req->phone;
        $member->save();
        return redirect('/');

    }
}
