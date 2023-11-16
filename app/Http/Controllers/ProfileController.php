<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id){
        $name="Donal Trump";
        $age = "75";

        $data=[
            'id'=>$id,
            'name'=>$name,
            'age'=>$age
        ];

        $cookieName="access_token";
        $value="123-XYZ";
        $expTime=1;
        $path="/";
        $domain=$_SERVER["SERVER_NAME"];
        $secure=false;
        $httpOnly=true;

        return response($data,200)->cookie($cookieName, $value, $expTime, $path, $domain, $secure, $httpOnly);

    }
}
