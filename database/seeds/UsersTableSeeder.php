<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		Db::table('nusers')->insert([
			['name'=>'admin', 'password'=>md5('123456'), 'tel'=>'13312345678', 'token'=>'', 'addtime'=>time()]
		]);
    }
}
