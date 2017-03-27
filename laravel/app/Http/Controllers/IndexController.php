<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function info(){
        return view('admin.admin_index');
    }
    function index1(){
        return view('admin.admin_info');
    }
    function  user_search(){
        return view('admin.admin_user_search');
    }
    function user(){
        return view('admin.admin_user');
    }
    function admin(){
        return view('admin.admin_admin');
    }
    function add_admin(){
        return view('admin.admin_add_admin');
    }
    function weibo(){
        return view('admin.weibo');
    }
    function weibo_search(){
        return view('admin.weibo_search');
    }
    function weibo_repeat(){
        return view('admin.weibo_repeat');
    }
    function comment(){
        return view('admin.comment');
    }
    function comment_search(){
        return view('admin.comment_search');
    }
    function weibo_classify(){
        return view ('admin.weibo_classify');
    }
    function feedback(){
        return view ('admin.feedback');
    }
    function image(){
        return view ('admin.image');
    }
    function report(){
        return view ('admin.report');
    }
    function login(){
        return view ('admin.login');
    }
}
