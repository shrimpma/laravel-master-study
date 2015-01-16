<?php

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function login()
	{
        $user = '13426259307';
        $pwd = '10dd196640aebb05b69efd49115586d9';
        $results = DB::select("select * from jx_user_client where mobile= ? and password=? limit 1",array($user,$pwd))->row();
        print_r($results);
        
	}

}
