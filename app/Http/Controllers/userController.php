<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function getList(){
       
        //render view trong laravel
        //đứng từ file views
        return view('user');
    }


    function getAdd(){
        
        return view('add_user');
    }

    function getEdit(){

        return view('edit_user');
    }
}
