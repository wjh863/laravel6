<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
	public function getsome()
	{
		echo 1111111111;
		$method = $request->method();
		echo $method;
	}
}
