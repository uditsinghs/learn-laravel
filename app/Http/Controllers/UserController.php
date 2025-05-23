<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Udit singh";
    }
    function getUserNameByRoute($name){
        return view("home",["name"=>$name]);
    }
    function getView(){
        $usersArr  = array("udit","sam","kiyara","arun");
        return view("user",["users"=>$usersArr]);
    }
}
