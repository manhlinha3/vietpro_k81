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

    function postAdd(request $r){
        // dd giúp hiển thị tất cả dữ liệu trong php
        // khi gặp hàm dd thì dừng toàn bộ chương trình
        // echo 'trang xu ly ket qua';
        // dd($r->full);

        // $rules (là 1 mảng) chứa các quy tắc mà ô input phải tuân thủ
        // key là name của ô input cần check lỗi
        // value là các quy tắc dành cho ô input
        $rules = [
            'full' => 'required|min:3',
            'phone' => 'required',
            'address' => 'required',
            'id_number' => 'required',
        ];

        $messages = [
            'full.required' => 'Họ và tên không được để trống',
            'full.min' => 'Họ và tên phải có nhiều hơn 3 kí tự',
            // 'full.max' => 'Họ và tên không được vượt quá 2',
            'phone.required' => 'Số điện thoại không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'id_number.required' => 'Số chứng minh thư không được để trống',
        ];

        $r->validate($rules, $messages);
    }

    function getEdit(){

        return view('edit_user');
    }
}
