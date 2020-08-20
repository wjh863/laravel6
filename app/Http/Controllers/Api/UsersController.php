<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Api\Users;

class UsersController extends Controller
{
	public $tmp_users;
    //
	public function login()
	{
		return view('api/login');
		
		
	}
	
	public function dologin(Request $request)
	{
		// echo 111111112222;
		$method = $request->method();
		// echo $method;
		
		if(strtolower($method) == 'post')
		{
			$valid = $request->validate([
				'uname' => 'required|max:11',
				'pwd'   => 'required'
			],[
				'required' => ':attribute 为必填项'
			],[
				'uname' => '手机号',
				'pwd'   => '密码'
			]);
			
			$tel = $request->input('uname');
			$pwd = $request->input('pwd');
			
			// $users = Users::all();
			// $users = $users->unique();
			// ==========================
			// echo '<pre>';var_dump($users);echo '</pre>';
			// $info = Users::where('tel', $tel)->get();
			// $info = $info->toArray();
			// echo '<pre>';var_dump($info);echo '</pre>';
			// foreach($info as $val)
			// {
				// var_dump($val['tel']);
			// }
			// ==========================
			
			// $info = DB::table('nusers')->chunkById(10, function($users){
				// $users = $users->toArray();
				
				// $this->tmp_users  = $users;
				
				// foreach($users as $user)
				// {
					// echo $user->tel.',';
				// }
			// });
			// echo '<pre>';var_dump($this->tmp_users);echo '</pre>';
			
			// $info  = DB::table('nusers')->select('name');
			// $users = $info->addSelect('tel')->get();
			// echo '<pre>';var_dump($users);echo '</pre>';
			
			// 无论是否有 toArray()，结果都是对象
			// $info = DB::table('nusers')->where('tel', '13245679899')->selectRaw('tel')->get();//->toArray();
			// echo '<pre>';var_dump($info); echo $info[0]->tel;echo '</pre>';
			
			// 有没有 where 一个结果
			// $info = DB::table('nusers')->orWhere('name', 'admin')->get();//->where('age', '>', 25)
			// echo '<pre>';var_dump($info); echo $info[0]->tel;echo '</pre>';
			
			// $info = DB::table('nusers')->whereBetween('age', [21, 28])->get();
			// echo '<pre>';var_dump($info); echo $info[0]->tel;echo '</pre>';
			
			// sharedLock 共享锁可防止选中的数据列被篡改，直到事务被提交为止
			// DB::beginTransaction();
			// $info = DB::table('nusers')->whereBetween('age', [21, 28])->sharedLock()->get();
			// $ret  = DB::table('nusers')->where('id', 2)->update(['age'=>28]); // 直到执行commit为止，nusers表才更新
			// DB::commit();
			
			$info = DB::table('nusers')->Paginate(1);
			echo '<pre>';var_dump($info); echo $info[0]->tel;echo '</pre>';
			
			
			
			
		}
	}
}
