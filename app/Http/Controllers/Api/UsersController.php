<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\Users;

class UsersController extends Controller
{
    //
	public function login()
	{
		return view('api/login');
		
		
	}
	
	public function dologin(Request $request)
	{
		echo 111111112222;
		$method = $request->method();
		echo $method;
		
		if($method == 'post')
		{
			$valid = $request->validate([
				'uname' => 'required|unique:posts|max:11',
				'pwd'   => 'required'
			],[
				'required' => ':attribute 为必填项'
			],[
				'uname' => '手机号',
				'pwd'   => '密码'
			]);
			
			$tel = $request->input('uname');
			$pwd = $request->input('pwd');
			
			
		}
	}
}
